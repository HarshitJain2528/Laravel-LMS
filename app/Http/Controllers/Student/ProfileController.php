<?php

namespace App\Http\Controllers\Student;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Update the profile information for the authenticated student.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        try {
            $data = User::findOrFail($id);
    
            $request->validate([
                'username' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:15',
                'password' => 'nullable|min:8|confirmed',
            ]);
    
            $data->update([
                'name' => $request->input('username'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => $request->filled('password') ? Hash::make($request->input('password')) : $data->password,
            ]);
    
            return redirect()->back()->with(['success' => 'Profile updated successfully']);

        } catch (\Exception $e) {
            // Handle the exception, log it, or provide a meaningful error response
            return redirect()->back()->with(['error' => 'Error updating profile. Please try again.']);
        }
    }
}
