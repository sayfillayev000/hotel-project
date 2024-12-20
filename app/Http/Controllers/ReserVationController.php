<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserVationController extends Controller
{
    public function storeRoom(Request $request)
    {
        $existingReservation = Reservation::where('room_id', $request->room_id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                    ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                    ->orWhere(function ($query) use ($request) {
                        $query->where('start_date', '<=', $request->start_date)
                            ->where('end_date', '>=', $request->end_date);
                    });
            })
            ->first(); 

        if ($existingReservation) {
            $startDate = $existingReservation->start_date;
            $endDate = $existingReservation->end_date;

            return back()->withErrors([
                'error' => "Bu xona $startDate dan $endDate gacha band qilingan!"
            ]);
        }

        Reservation::create([
            'user_id' => Auth::id(),
            'room_id' => $request->room_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return back()->with('success', 'Xona muvaffaqiyatli band qilindi.');
    }



    public function createRoom($id)
    {
        return view('pages.brom')->with('room_id', $id);
    }
}
