<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function main()
    {
        return view('pages.main');
    }

    public function room()
    {
        return view('rooms.index')->with('rooms', Room::all());
    }

    public function contactus()
    {
        return view('pages.contactus');
    }
    public function opportunities()
    {
        return view('pages.opportunities');
    }

    public function brom($id)
    {
        $check = Payment::where('user_id', Auth::id())->first();
        if ($check) {
            return redirect()->route('createRoom', ['id' => $id]);
        }
        return view('pages.payment')->with('room_id', $id);
    }

    public function admin()
    {
        return view('pages.admin')->with('bookings', Reservation::all());
    }
}
