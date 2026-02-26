<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin; // assuming your admins are in Admin model
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ForgotPasswordController extends Controller
{
    // Step 1: Verify email exists
    public function verifyEmail(Request $request)
    {
        $request->validate([
            'forgot_email' => 'required|email|exists:admins,email',
        ]);

        // Return a JSON response or redirect to show reset password form
        // return response()->json([
        //     'status' => true,
        //     'message' => 'Email verified. You can now reset your password.'
        // ]);
    }

    // Step 2: Reset Password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $admin = Admin::where('email', $request->email)->first();
        $admin->password = Hash::make($request->password);
        $admin->save();

        return response()->json([
            'status' => true,
            'message' => 'Password successfully updated.'
        ]);
    }
}
