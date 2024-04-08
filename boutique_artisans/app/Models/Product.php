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
    // The 'HasUuids' trait is likely a custom trait providing functionality related to UUIDs.
    protected $fillable = [
        "name",
        "price",
        "weight",
        "material",
        "description",
        "image_url",
        "stock",
        "category",
        "shop_id"
    ];

    // The 'shop' method defines a relationship between the Product and Shop models.
    public function shop(): BelongsTo
    {
        // This product belongs to a shop.
        return $this->belongsTo(Shop::class);
    }

    // The 'user' method defines a relationship between the Product and User models.
    public function user(): BelongsTo {
        // This product belongs to a user.
        return $this->belongsTo(User::class);
    }

    // The 'orders' method defines a many-to-many relationship between the Product and Order models.
    public function orders(): BelongsToMany {
        // This product belongs to many orders, with additional pivot data like quantity, color, and size.
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'color', 'size');
    }

}
