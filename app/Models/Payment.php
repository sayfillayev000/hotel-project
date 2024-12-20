<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $fillable  = [
        'user_id',
        'room_id',
        'card_number',
        'expiry_date',
        'cvv'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
