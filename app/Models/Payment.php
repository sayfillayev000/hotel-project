<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable  = [
        'user_id',
        'start_date',
        'end_date',
        'room_id',
        'card_number',
        'expiry_date',
        'cvv'
    ];
}
