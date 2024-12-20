<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function processPayment(PaymentRequest $request)
    {
        Payment::create([
            'user_id' => Auth::id(),
            'card_number' => $request->card_number,
            'expiry_date' => $request->expiry_date,
            'cvv' => $request->cvv,
        ]);
        return redirect()->route('createRoom', ['id' => $request->room_id]);
    }
}
