<?php

namespace App\Models\Blog;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Tags\HasTags;

/**
 * @property int $id
 * @property int|null $blog_author_id
 * @property int|null $blog_category_id
 * @property string $title
 * @property string $slug
 * @property string $content_type markdown, html
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $published_at
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read User|null $author
 * @property-read \App\Models\Blog\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Comment> $comments
 * @property-read int|null $comments_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Spatie\Tags\Tag> $tags
 * @property-read int|null $tags_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post withAnyTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post withAnyTagsOfType(array|string $type)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post withoutTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 *
 * @mixin \Illuminate\Database\Eloquent\Model
 */
class Post extends Model
{
    use HasFactory;
    use HasTags;

    /**
     * @var string
     */
    protected $table = 'blog_posts';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'blog_author_id',
        'blog_category_id',
        'title',
        'slug',
        'content_type',
        'content',
        'published_at',
        'seo_title',
        'seo_description',
        'image',
    ];

    /** @return BelongsTo<User,self> */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'blog_author_id');
    }

    /** @return BelongsTo<Category,self> */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'blog_category_id');
    }

    /** @return MorphMany<Comment> */
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'published_at' => 'date',
        ];
    }
}
