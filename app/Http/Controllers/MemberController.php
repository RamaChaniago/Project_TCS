<?php

namespace App\Http\Controllers;

use App\Models\memberManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the user profile page.
     */
    public function index()
    {
        return view('Profile.Profile_Member.MainProfil');
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'phone' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:500'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('member.index')->with('success', 'Profile updated successfully.');
    }

    /**
     * Update the user's password.
     */
    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Verify current password
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect.'])->withInput();
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('member.index')->with('success', 'Password updated successfully.');
    }

    /**
     * Update the user's profile image in member_management.
     */
    public function updateImage(Request $request)
    {
        $user = Auth::user();
        $member = $user->getMemberInfo;

        // Ensure member record exists
        if (!$member) {
            $member = memberManagement::create([
                'user_id' => $user->id,
                'status' => 'active',
                'registration_type' => 'manual',
            ]);
        }

        $validator = Validator::make($request->all(), [
            'profile_image' => ['required', 'image', 'mimes:jpg,png,gif', 'max:2048'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($member->profile_image) {
                Storage::disk('public')->delete('profile_images/' . $member->profile_image);
            }

            // Store new image
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');

            // Update member_management with new image path
            $member->update([
                'profile_image' => basename($imagePath),
            ]);
        }

        return redirect()->route('member.index')->with('success', 'Profile image updated successfully.');
    }
}
