<?php

namespace App\Http\Controllers;

use App\Models\User; // Assuming you have a User model for bookings
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verifyEmail($token)
    {
        // Find user by token and mark email as verified
        $user = User::where('verification_token', $token)->first();

        if ($user) {
            $user->update([
                'email_verified_at' => now(), // Laravel's built-in email verification timestamp
                'verification_token' => null, // Clear the token after verification
            ]);

            return redirect('/home')->with('success', 'Email verified successfully. You can now proceed with your booking.');
        }

        return redirect('/home')->with('error', 'Invalid verification token.');
    }
}

