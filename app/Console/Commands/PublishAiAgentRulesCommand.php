<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

final class PublishAiAgentRulesCommand extends Command
{
    /**
     * Available AI Agents configuration
     *
     * @var array<string, array{dir: string, extension: string, header: string}>
     */
    private const AGENTS = [
        'cursor' => [
            'dir' => '.cursor/rules',
            'extension' => 'mdc',
            'header' => 'generateCursorHeader',
        ],
        'antigravity' => [
            'dir' => '.agent/rules',
            'extension' => 'md',
            'header' => 'generateAntigravityHeader',
        ],
    ];

    /**
     * Available stub files configuration
     *
     * @var array<string, array{name: string, description: string, alwaysApply: bool, trigger?: string, globs?: string}>
     */
    private const STUBS = [
        'laravel' => [
            'name' => 'laravel',
            'description' => 'Laravel coding standards and best practices',
            'alwaysApply' => true,
            'trigger' => 'glob',
            'globs' => '*.php',
        ],
        'blade' => [
            'name' => 'blade',
            'description' => 'Blade template shell script guidelines',
            'alwaysApply' => true,
            'trigger' => 'glob',
            'globs' => '*.blade.php',
        ],
        'tailwind' => [
            'name' => 'tailwind',
            'description' => 'Tailwind CSS coding conventions',
            'alwaysApply' => true,
            'trigger' => 'glob',
            'globs' => '*.blade.php, *.js, *.css, *.ts, *.vue, *.html',
        ],
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ai-agent:rules';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish AI Agent rules to selected agents';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $selectedAgents = $this->selectAgents();
        $selectedStubs = $this->selectStubs();

        if (empty($selectedAgents) || empty($selectedStubs)) {
            $this->error('No agents or stubs selected.');

            return self::FAILURE;
        }

        $stubPath = base_path('stubs/ai-agent-rules');
        if (! File::exists($stubPath)) {
            $this->error("Stub directory not found: {$stubPath}");

            return self::FAILURE;
        }

        $published = 0;
        $skipped = 0;

        foreach ($selectedAgents as $agent) {
            $agentConfig = self::AGENTS[$agent];
            $targetDir = base_path($agentConfig['dir']);

            // Tạo thư mục nếu chưa có
            if (! File::exists($targetDir)) {
                File::makeDirectory($targetDir, 0755, true);
                $this->info("Created directory: {$targetDir}");
            }

            foreach ($selectedStubs as $stubKey) {
                $stubConfig = self::STUBS[$stubKey];
                $stubName = $stubConfig['name'];
                $stubFile = "{$stubPath}/{$stubName}.stub";
                $targetFile = "{$targetDir}/{$stubName}.{$agentConfig['extension']}";

                if (! File::exists($stubFile)) {
                    $this->warn("Stub file not found: {$stubFile}");
                    $skipped++;

                    continue;
                }

                // Đọc nội dung stub
                $stubContent = File::get($stubFile);

                // Generate header theo agent
                $headerMethod = $agentConfig['header'];
                $header = $this->{$headerMethod}($stubConfig);

                // Ghi file với header + content
                $content = $header."\n\n".$stubContent;
                File::put($targetFile, $content);

                $this->info("Published {$stubName}.{$agentConfig['extension']} to {$agent} ({$targetFile})");
                $published++;
            }
        }

        $this->newLine();
        $this->info("Published: {$published} file(s), Skipped: {$skipped} file(s)");

        return self::SUCCESS;
    }

    /**
     * Select AI Agents to publish rules to
     *
     * @return array<string>
     */
    private function selectAgents(): array
    {
        $agents = array_keys(self::AGENTS);
        $options = array_merge(['all'], $agents);

        $choice = $this->choice(
            'Select AI Agent(s) to publish rules to',
            $options,
            'all'
        );

        if ($choice === 'all') {
            return $agents;
        }

        return [$choice];
    }

    /**
     * Select stub files to publish
     *
     * @return array<string>
     */
    private function selectStubs(): array
    {
        $stubKeys = array_keys(self::STUBS);
        $options = array_merge(['all'], $stubKeys);

        $choice = $this->choice(
            'Select stub file(s) to publish',
            $options,
            'all'
        );

        if ($choice === 'all') {
            return $stubKeys;
        }

        return [$choice];
    }

    /**
     * Generate Cursor header
     *
     * @param  array{name: string, description: string, alwaysApply: bool}  $stubConfig
     */
    private function generateCursorHeader(array $stubConfig): string
    {
        $alwaysApply = $stubConfig['alwaysApply'] ? 'true' : 'false';

        return "---\nalwaysApply: {$alwaysApply}\n---";
    }

    /**
     * Generate Antigravity header
     *
     * @param  array{name: string, description: string, alwaysApply: bool, trigger?: string, globs?: string}  $stubConfig
     */
    private function generateAntigravityHeader(array $stubConfig): string
    {
        $description = $stubConfig['description'];
        $trigger = $stubConfig['trigger'] ?? 'always_on';
        $globs = $stubConfig['globs'] ?? null;

        $header = "---\ntrigger: {$trigger}\n";

        if ($trigger === 'glob' && $globs !== null) {
            $header .= "globs: {$globs}\n";
        }

        $header .= "description: {$description}\n---";

        return $header;
    }
}
