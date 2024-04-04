<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        "name",
        "price",
        "weight",
        "material",
        "description",
        "image_url",
        "stock",
        "category"
    ];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function orders(): BelongsToMany {
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'color', 'size');
    }

}
