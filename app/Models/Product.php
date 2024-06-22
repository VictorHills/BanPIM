<?php

namespace App\Models;

use App\Traits\FilterByCreatedBy;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    use FilterByCreatedBy;

    protected $fillable = [
        'name',
        'title',
        'description',
        'category_id',
        'tag_id',
        'size',
        'weight',
        'sku_id',
        'color',
        'views',
        'downloads',
        'created_by'
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
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function newFactory(): ProductFactory
    {
        return ProductFactory::new();
    }
}
