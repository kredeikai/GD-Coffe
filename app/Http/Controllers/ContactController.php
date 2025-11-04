<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;    // <- WAJIB

class ContactController extends Controller
{
    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
