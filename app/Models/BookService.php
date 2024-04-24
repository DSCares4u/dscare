<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookService extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function service(): HasOne
    {
        return $this->HasOne(Service::class, 'id', 'service_id');
    }
}
