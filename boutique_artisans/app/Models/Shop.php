<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUniqueIds;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Shop extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        "name",
        "description",
        "user_id"
        ];

    public function products(): HasMany{
        return $this->hasMany(Product::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }


}
