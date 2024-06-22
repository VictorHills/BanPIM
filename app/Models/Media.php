<?php

namespace App\Models;

use App\Traits\FilterByCreatedBy;
use Database\Factories\MediaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    use HasFactory;
    use FilterByCreatedBy;

    protected $fillable = [
        'created_by',
        'name',
        'description',
        'category_id',
        'file_path'
    ];

    /**
     * The attributes that should be mutated to date.
     *
     * @var array
     */
    protected array $dates = [
        'deleted_at'
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function newFactory(): MediaFactory
    {
        return MediaFactory::new();
    }
}
