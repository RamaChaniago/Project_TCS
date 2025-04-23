<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\adminManagement;
use App\Models\instructorManagement;
use App\Models\memberManagement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class userManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data user dengan role 'admin' dan join dengan tabel adminManagement
        $admins = User::with('getAdminInfo')
            ->where('role', 'admin')
            ->paginate(10);

        $instructors = User::with('getInstructorInfo')
            ->where('role', 'instructor')
            ->paginate(10);

        $users = User::with('getMemberInfo')
            ->where('role', 'member')
            ->paginate(10);

        $totalUsers = User::where('role', 'member')->count();
        $googleUsers = memberManagement::where('registration_type', 'google')->count();
        $activeUsers = memberManagement::where('status', 'active')->count();
        $newUsers = User::where('role', 'member')
            ->whereDate('created_at', '>=', now()->subDays(30))
            ->count();

        return view('Admin.User-Management', compact('admins', 'instructors', 'users', 'totalUsers', 'googleUsers', 'activeUsers', 'newUsers'));

        // return view('Admin.User-Management', compact('admins', 'instructors', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->role == 'admin') {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'phone' => 'required',
                'role' => 'required',
                'password' => 'required|min:6|confirmed',
                'status' => 'required',
                'profile_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'bio' => 'required',
            ]);

            // Simpan user
            $saveUser = new User();
            $saveUser->name = $request->name;
            $saveUser->email = $request->email;
            $saveUser->phone = $request->phone;
            $saveUser->password = Hash::make($request->password);
            $saveUser->role = $request->role;
            $saveUser->save();

            // Simpan gambar ke storage/app/public/userPictures
            $profileImagePath = null;
            if ($request->hasFile('profile_image')) {
                $profileImagePath = $request->file('profile_image')->store('userPictures', 'public');
            }

            // Simpan data admin
            $saveAdminManagement = new adminManagement();
            $saveAdminManagement->user_id = $saveUser->id;
            $saveAdminManagement->status = $request->status;
            $saveAdminManagement->profile_image = $profileImagePath;
            $saveAdminManagement->bio = $request->bio;
            $saveAdminManagement->save();

            Alert::success('Save Data Success', 'User berhasil ditambahkan!');
            return redirect('/user-management');
        } elseif ($request->role == 'instructor') {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'phone' => 'required',
                'password' => 'required|min:6|confirmed',
                'status' => 'required',
                'specialization' => 'required',
                'profile_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'bio' => 'required',
            ]);

            // Simpan user
            $saveUser = new User();
            $saveUser->name = $request->name;
            $saveUser->email = $request->email;
            $saveUser->phone = $request->phone;
            $saveUser->password = Hash::make($request->password);
            $saveUser->role = 'instructor'; // Hardcode untuk memastikan nilai benar
            $saveUser->save();

            // Simpan gambar ke storage/app/public/userPictures
            $profileImagePath = null;
            if ($request->hasFile('profile_image')) {
                $profileImagePath = $request->file('profile_image')->store('userPictures', 'public');
            }

            // Simpan data instructor
            $saveInstructorManagement = new instructorManagement();
            $saveInstructorManagement->user_id = $saveUser->id;
            $saveInstructorManagement->status = $request->status;
            $saveInstructorManagement->specialization = $request->specialization;
            $saveInstructorManagement->profile_image = $profileImagePath;
            $saveInstructorManagement->bio = $request->bio;
            $saveInstructorManagement->save();

            Alert::success('Save Data Success', 'Instructor berhasil ditambahkan!');
            return redirect('/user-management');
        } elseif ($request->role == 'member') {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'phone' => 'required',
                'password' => 'required|min:6|confirmed',
                'status' => 'required',
                'registration_type' => 'required',
                'profile_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            // Simpan user
            $saveUser = new User();
            $saveUser->name = $request->name;
            $saveUser->email = $request->email;
            $saveUser->phone = $request->phone;
            $saveUser->password = Hash::make($request->password);
            $saveUser->role = 'member';
            $saveUser->save();

            // Simpan gambar ke storage/app/public/userPictures
            $profileImagePath = null;
            if ($request->hasFile('profile_image')) {
                $profileImagePath = $request->file('profile_image')->store('userPictures', 'public');
            }

            // Simpan data member
            $saveMemberManagement = new memberManagement();
            $saveMemberManagement->user_id = $saveUser->id;
            $saveMemberManagement->status = $request->status;
            $saveMemberManagement->registration_type = $request->registration_type;
            $saveMemberManagement->profile_image = $profileImagePath;
            $saveMemberManagement->save();

            Alert::success('Save Data Success', 'Member berhasil ditambahkan!');
            return redirect('/user-management');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with(['getAdminInfo', 'getInstructorInfo', 'getMemberInfo'])->findOrFail($id);
        return view('Admin.show-user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        // Validasi dasar untuk semua jenis user
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'phone' => 'required',
            'status' => 'required',
        ]);

        // Update user data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        // Update password jika diisi
        if ($request->filled('password') && $request->filled('password_confirmation')) {
            $request->validate([
                'password' => 'required|min:6|confirmed',
            ]);
            $user->password = Hash::make($request->password);
        }

        $user->save();

        // Update data berdasarkan role
        if ($user->role == 'admin') {
            $adminInfo = adminManagement::where('user_id', $id)->first();
            $adminInfo->status = $request->status;

            if ($request->filled('bio')) {
                $adminInfo->bio = $request->bio;
            }

            if ($request->hasFile('profile_image')) {
                // Hapus gambar lama jika ada
                if ($adminInfo->profile_image && Storage::disk('public')->exists($adminInfo->profile_image)) {
                    Storage::disk('public')->delete($adminInfo->profile_image);
                }

                $profileImagePath = $request->file('profile_image')->store('userPictures', 'public');
                $adminInfo->profile_image = $profileImagePath;
            }

            $adminInfo->save();
        } elseif ($user->role == 'instructor') {
            $instructorInfo = instructorManagement::where('user_id', $id)->first();
            $instructorInfo->status = $request->status;

            if ($request->filled('specialization')) {
                $instructorInfo->specialization = $request->specialization;
            }

            if ($request->filled('bio')) {
                $instructorInfo->bio = $request->bio;
            }

            if ($request->hasFile('profile_image')) {
                // Hapus gambar lama jika ada
                if ($instructorInfo->profile_image && Storage::disk('public')->exists($instructorInfo->profile_image)) {
                    Storage::disk('public')->delete($instructorInfo->profile_image);
                }

                $profileImagePath = $request->file('profile_image')->store('userPictures', 'public');
                $instructorInfo->profile_image = $profileImagePath;
            }

            $instructorInfo->save();
        } elseif ($user->role == 'member') {
            $memberInfo = memberManagement::where('user_id', $id)->first();
            $memberInfo->status = $request->status;

            if ($request->filled('registration_type')) {
                $memberInfo->registration_type = $request->registration_type;
            }

            if ($request->hasFile('profile_image')) {
                // Hapus gambar lama jika ada
                if ($memberInfo->profile_image && Storage::disk('public')->exists($memberInfo->profile_image)) {
                    Storage::disk('public')->delete($memberInfo->profile_image);
                }

                $profileImagePath = $request->file('profile_image')->store('userPictures', 'public');
                $memberInfo->profile_image = $profileImagePath;
            }

            $memberInfo->save();
        }

        Alert::success('Update Success', 'Data user berhasil diperbarui!');
        return redirect('/user-management');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        // Delete related info based on role
        if ($user->role == 'admin') {
            $adminInfo = adminManagement::where('user_id', $id)->first();
            if ($adminInfo) {
                // Delete profile image if exists
                if ($adminInfo->profile_image && Storage::disk('public')->exists($adminInfo->profile_image)) {
                    Storage::disk('public')->delete($adminInfo->profile_image);
                }
                $adminInfo->delete();
            }
        } elseif ($user->role == 'instructor') {
            $instructorInfo = instructorManagement::where('user_id', $id)->first();
            if ($instructorInfo) {
                // Delete profile image if exists
                if ($instructorInfo->profile_image && Storage::disk('public')->exists($instructorInfo->profile_image)) {
                    Storage::disk('public')->delete($instructorInfo->profile_image);
                }
                $instructorInfo->delete();
            }
        } elseif ($user->role == 'member') {
            $memberInfo = memberManagement::where('user_id', $id)->first();
            if ($memberInfo) {
                // Delete profile image if exists
                if ($memberInfo->profile_image && Storage::disk('public')->exists($memberInfo->profile_image)) {
                    Storage::disk('public')->delete($memberInfo->profile_image);
                }
                $memberInfo->delete();
            }
        }

        // Delete user
        $user->delete();

        Alert::success('Delete Success', 'User berhasil dihapus!');
        return redirect('/user-management');
    }
}
