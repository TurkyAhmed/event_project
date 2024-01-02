<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'=>' علي محمد حبيشان ',
            'phone'=>'781015110',
            'email'=>'halls@bnmahfouz.com',
            'password'=>'123',
        ]);

        $employee =new Employee([
            'address'=>'اربعين شقة',
        ]);

        $user->employee()->save($employee);
    }
}
