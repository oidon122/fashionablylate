<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'phone_area_code', 'phone_exchange_code', 'phone_subscriber_number', 'address', 'building', 'content', 'detail']);

        $contact['tel'] = $request->phone_area_code . $request->phone_exchange_code . $request->phone_subscriber_number;

        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        $contact['category_id'] = $request->input('content');
        
        Contact::create($contact);
        return view('thanks');
    }
}
