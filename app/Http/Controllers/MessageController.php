<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\MessageRequest;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        return view('pages.message')->with('messages', Message::all());
    }

    public function store(MessageRequest $request)
    {
        try {
            Message::create([
                'user_id' => Auth::id(),
                'phone' => $request->phone,
                'message' => $request->message
            ]);
            return redirect()->back()->with('success', 'Xabaringiz muvaffaqiyatli yuborildi!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e);
        }
    }
}
