<?php

namespace Database\Seeders;

use App\Models\adminManagement;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Simpan data user admin
        $saveUser = new User();
        $saveUser->name = 'Admin';
        $saveUser->email = 'admin@gmail.com';
        $saveUser->phone = '082208220822';
        $saveUser->password = Hash::make('12345678');
        $saveUser->role = 'admin';
        $saveUser->save();

        // Simpan data admin_management
        $saveAdminManagement = new adminManagement();
        $saveAdminManagement->user_id = $saveUser->id;
        $saveAdminManagement->status = 'active';
        $saveAdminManagement->profile_image = null; // karena nullable
        $saveAdminManagement->bio = 'Ini akun admin utama sistem.';
        $saveAdminManagement->save();
    }
}
