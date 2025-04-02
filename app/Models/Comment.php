<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int $id
 * @property int|null $user_id
 * @property string $commentable_type
 * @property int $commentable_id
 * @property string|null $title
 * @property string|null $content
 * @property bool $is_visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $author
 * @property-read \Illuminate\Database\Eloquent\Model $commentable
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment query()
 *
 * @mixin \Illuminate\Database\Eloquent\Model
 */
class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $guarded = [];

    /** @return MorphTo<Model,self> */
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    /** @return BelongsTo<User,self> */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected function casts(): array
    {
        return [
            'is_visible' => 'boolean',
        ];
    }
}
