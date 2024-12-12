<?php

namespace App\Http\Controllers;

use App\Models\Payment;


class PageController extends Controller
{
    public function main()
    {
        return view('pages.main');
    }

    public function room()
    {
        return view('pages.rooms');
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
        return view('pages.payment')->with('room_id', $id);
    }

    public function admin()
    {
        return view('pages.admin')->with('bookings', Payment::all());
    }
}