<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'madedipta88@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'gender' => 0,
        ]);

        $admin->assignRole('admin');

        // $user = User::create([
        //     'name' => 'User',
        //     'email' => 'maddedipta86@gmail.com',
        //     'username' => 'user',
        //     'password' => bcrypt('user'),
        // ]);

        // $user->assignRole('user');
    }
}
