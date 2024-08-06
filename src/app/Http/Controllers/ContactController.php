<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'phone_area_code', 'phone_exchange_code', 'phone_subscriber_number', 'address', 'building', 'content', 'detail']);
        return view('confirm', compact('contact'));
    }
}
