<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminForgotPasswordController extends Controller
{
    // STEP 1: Show email form
    public function showEmailForm()
    {
        return view('admin.forgot-password');
    }

    // STEP 2: Check email in DB
    public function checkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            return back()->withErrors(['email' => 'Email not found']);
        }

        return view('admin.reset-password', [
            'email' => $request->email
        ]);
    }

    // STEP 3: Reset password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            return redirect()->route('admin.forgot')
                ->withErrors(['email' => 'Something went wrong']);
        }

        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect()->route('admin.login')
            ->with('success', 'Password reset successfully');
    }
}
