<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
     public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => [
                'required',
                'max:255'
            ],

            'email' => [
                'required',
                'email'
            ],

            'phone' => [
                'required',
                'max:20'
            ],

            'message' => [
                'required'
            ]

        ]);

        Contact::create($validated);

        return redirect()
            ->back()
            ->with(
                'success',
                'Thank you! We will contact you soon.'
            );
    }
}
