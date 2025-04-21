<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\adminManagement;
use App\Models\instructorManagement;
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
                ->paginate();

        $instructors = User::with('getInstructorInfo')
                ->where('role', 'instructor')
                ->paginate();
    

        return view('Admin.User-Management', compact('admins', 'instructors'));
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

        }elseif ($request->role == 'instructor') {

            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'phone' => 'required',
                // 'role' => 'required',
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
            $saveUser->role = $request->role;
            $saveUser->save();
    
             // Simpan gambar ke storage/app/public/userPictures
             $profileImagePath = null;
             if ($request->hasFile('profile_image')) {
                 $profileImagePath = $request->file('profile_image')->store('userPictures', 'public');
             }
    
            $saveInstructorManagement = new instructorManagement();
            $saveInstructorManagement-> user_id = $saveUser->id;
            $saveInstructorManagement-> status = $request->status;
            $saveInstructorManagement-> specialization = $request->specialization;
            $saveInstructorManagement-> profile_image = $profileImagePath;
            $saveInstructorManagement-> bio = $request->bio;
            $saveInstructorManagement->save();
            
    
            Alert::success('Save Data Success', 'Instructor berhasil ditambahkan!');
            return redirect('/user-management');


        }elseif($request->role == 'member'){

        }
        


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
