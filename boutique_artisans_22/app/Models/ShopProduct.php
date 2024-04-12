<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ShopProduct extends Pivot
{
    use HasFactory, HasUuids;

    protected $fillable = [
//        "shop_id",
//        "product_id",
];
}
