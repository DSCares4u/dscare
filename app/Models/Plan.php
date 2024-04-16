<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'features',
        'image',
        'price',
        'discount_price',
        'recommendation',
    ];

    public function book_plans(): HasMany
    {
        return $this->hasMany(BookPlan::class);
    }
}
