<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // علي محمد حبيشان
        $user = User::create([
            'role_id'=> 1,
            'name'=>' علي محمد حبيشان ',
            'phone'=>'781015110',
            'email'=>'halls@bnmahfouz.com',
            'password'=>Hash::make('123456'),
        ]);

        $employee =new Employee([
            'address'=>'اربعين شقة',
        ]);

        $user->employee()->save($employee);

        // سعيد محمد الحبشي
        $user1 = User::create([
            'role_id'=> 1,
            'name'=>' سعيد محمد الحبشي',
            'phone'=>'781015110',
            'email'=>'saeed@gemail.com',
            'password'=>Hash::make('123456'),
        ]);

        $employee1 =new Employee([
            'address'=>' الشرج - باعبود ',
        ]);

        $user1->employee()->save($employee1);

        // حمود عبدالرقيب العطاس
        $user2 = User::create([
            'role_id'=> 1,
            'name'=>'  تركي احمد ',
            'phone'=>'739531388',
            'email'=>'t@gmail.com',
            'password'=>Hash::make('123456'),
        ]);

        $employee2 =new Employee([
            'address'=>' فوة القديمة ',
        ]);

        $user2->employee()->save($employee2);
    }
}
