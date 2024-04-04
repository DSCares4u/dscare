<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function doctor(): HasOne
    {
        return $this->HasOne(Doctor::class, 'id', 'doctor_id');
    }
}
