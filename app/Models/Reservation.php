<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bundle',
        'guests',
        'preference',
        'reservation_date',
        'reservation_time',
        'payment_method',
        'notes'
    ];
}