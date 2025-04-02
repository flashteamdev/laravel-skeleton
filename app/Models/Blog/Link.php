<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @property int $id
 * @property string $url
 * @property array<array-key, mixed> $title
 * @property array<array-key, mixed> $description
 * @property string $color
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $translations
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link whereLocales(string $column, array $locales)
 *
 * @mixin \Illuminate\Database\Eloquent\Model
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
