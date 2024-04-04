<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;

class BookService extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function service(): HasOne
    {
        return $this->HasOne(Service::class, 'id', 'service_id');
    }
}
