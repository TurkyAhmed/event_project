<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name'=>' وجبة بريك عادي 1 ',
            'price'=>'2',
            'is_main_service'=> 0,
            'is_avaliable'=> 1,
            'description'=>'',
        ]);

        Service::create([
            'name'=>' وجبة بريك مفتوح ',
            'price'=>'4',
            'is_main_service'=> 0,
            'is_avaliable'=> 1,
            'description'=>'',
        ]);

        Service::create([
            'name'=>' وجبة غداء دجاج  ',
            'price'=>'3',
            'is_main_service'=> 0,
            'is_avaliable'=> 1,
            'description'=>'',
        ]);

        Service::create([
            'name'=>' وجبة غداء مفتوح ',
            'price'=>'7',
            'is_main_service'=> 0,
            'is_avaliable'=> 1,
            'description'=>'',
        ]);
    }
}
