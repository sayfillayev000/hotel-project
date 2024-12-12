<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        $validatedData = $request->validate([
            'room_id' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'card_number' => 'required|string|max:16',
            'expiry_date' => 'required|string',
            'cvv' => 'required|string|max:3',
        ]);

        // To'lovni tasdiqlash jarayoni

        // Hozir shunchaki tasdiqlangan deb o'ylaymiz va pul yechib olamiz 

        Payment::create([
            'user_id' => Auth::id(),
            'room_id' => $request->room_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'card_number' => $request->card_number,
            'expiry_date' => $request->expiry_date,
            'cvv' => $request->cvv,
        ]);

        return back()->with('success', 'To\'lov muvaffaqiyatli bajarildi!');
    }
}
