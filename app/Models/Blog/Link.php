<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;

/**
 * @property int $id
 * @property string $url
 * @property array<array-key, mixed> $title
 * @property array<array-key, mixed> $description
 * @property string $color
 * @property string|null $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read mixed $translations
 *
 * @method static Builder<static>|Link newModelQuery()
 * @method static Builder<static>|Link newQuery()
 * @method static Builder<static>|Link query()
 * @method static Builder<static>|Link whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|Link whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|Link whereLocale(string $column, string $locale)
 * @method static Builder<static>|Link whereLocales(string $column, array $locales)
 *
 * @mixin Model
 */
class Link extends Model
{
    use HasFactory;
    use HasTranslations;

    /** @var string[] */
    public $translatable = [
        'title',
        'description',
    ];

    protected $table = 'blog_links';
}
