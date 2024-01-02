<?php

namespace Database\Seeders;

use App\Models\Hall;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Hall::truncate();

        Hall::create([
            'name'=>'قاعة السعادة' ,
            'capacity'=> '25',
            'feature'=> '',
            'price'=> '120',
            'discount'=> 0 ,
            'is_avaliable'=> 1,
            'description'=> '',
        ]);

        Hall::create([
            'name'=>'قاعة الهجرين' ,
            'capacity'=> '20',
            'feature'=> '',
            'price'=> '100',
            'discount'=> 0 ,
            'is_avaliable'=> 1,
            'description'=> '',
        ]);
    }
}
