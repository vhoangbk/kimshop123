<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $password = \Illuminate\Support\Facades\Hash::make('12345678');
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => $password,
            'avatar' => 'images/avatar.jpeg',
            'phone' => '0983456789',
            'address' => 'Hà nội',
            'is_active' => 1,
            'level' => 1,
            'email_verified_at' => date("Y-m-d H:i:s")
        ]);
    }
}
