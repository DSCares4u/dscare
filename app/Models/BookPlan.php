<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookPlan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function plan(): HasOne
    {
        return $this->HasOne(Plan::class, 'id', 'plan_id');
    }
}
