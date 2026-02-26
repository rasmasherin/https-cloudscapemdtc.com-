<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    // List all messages
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(10);
        return view('admin.contact_messages.index', compact('messages'));
    }

    // Show a single message
    public function show(ContactMessage $contactMessage)
    {
        return view('admin.contact_messages.show', compact('contactMessage'));
    }

    // Delete a message
    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();
        return redirect()->route('admin.contact_messages.index')->with('success', 'Message deleted successfully.');
    }

    // Store message from frontend form
   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'company' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'phone'   => ['nullable', 'regex:/^\d{10,15}$/'],
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string',
    ]);

    ContactMessage::create($request->only([
        'name','company','email','phone','subject','message'
    ]));

    return redirect()
        ->route('contact')
        ->with('success', 'Thank you! Your message has been sent successfully.');
}

}
