<?php

namespace Database\Seeders;

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
        User::factory(5)->create();
        User::create([
            'name'=>'Tungky Adi Pradana',
            'email'=>'tungky@gmail.com',
            'email_verified_at'=>now(),
            'phone'=>'6285875317958',
            'bio'=>'angular dev',
            'role'=>'admin',
            'password'=>Hash::make('123456')
        ]);
        User::create([
            'name'=>'Super admin',
            'email'=>'superadmin@gmail.com',
            'email_verified_at'=>now(),
            'phone'=>'6285875317959',
            'bio'=>'super dev',
            'role'=>'superadmin',
            'password'=>Hash::make('123456')
        ]);
    }
}
