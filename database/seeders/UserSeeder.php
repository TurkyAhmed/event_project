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
        User::create([
            //مؤسسة حضرموت
            'role_id'=> 2,
            'name'=>' مؤسسة حضرموت ',
            'phone'=>'781015110',
            'email'=>'hadramout@gemail.com',
            'password'=>Hash::make('123456'),
        ]);

        User::create([
            // منظمة المناخ
            'role_id'=> 2,
            'name'=>'  منظمة المناخ ',
            'phone'=>'781015110',
            'email'=>'mnakh@gemail.com',
            'password'=>Hash::make('123456'),
        ]);


        User::create([
            // وزارة التعليم
            'role_id'=> 2,
            'name'=>'  وزارة التعليم  ',
            'phone'=>'781015110',
            'email'=>'education@gemail.com',
            'password'=>Hash::make('123456'),
        ]);
    }
}
