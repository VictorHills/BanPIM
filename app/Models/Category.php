<?php

namespace App\Models;

use App\Traits\FilterByCreatedBy;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use FilterByCreatedBy;

    protected $fillable = [
        'name',
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
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * @return HasMany
     */
    public function media(): HasMany
    {
        return $this->hasMany(Media::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function newFactory(): CategoryFactory
    {
        return CategoryFactory::new();
    }
}
