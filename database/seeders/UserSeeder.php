<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            //مؤسسة حضرموت
            'name'=>' مؤسسة حضرموت ',
            'phone'=>'781015110',
            'email'=>'hadramout@gemail.com',
            'password'=>'123456',
        ]);

        User::create([
            // منظمة المناخ
            'name'=>'  منظمة المناخ ',
            'phone'=>'781015110',
            'email'=>'mnakh@gemail.com',
            'password'=>'123456',
        ]);


        User::create([
            // وزارة التعليم
            'name'=>'  وزارة التعليم  ',
            'phone'=>'781015110',
            'email'=>'education@gemail.com',
            'password'=>'123456',
        ]);
    }
}
