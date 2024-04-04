<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
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

    public function orders(): HasMany{
        return $this->hasMany(Order::class);
    }

}
