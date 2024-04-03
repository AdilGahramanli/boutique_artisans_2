<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
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

}
