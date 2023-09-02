<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([[
            'name'=>'iPhone 14',
            'price'=>'70000',
            'catagory'=>'Mobile',
            'description'=>' think your individual videos are better. Because, when you join two or more videos, there are some cut at the time of joining and some parts are get missing. But thanks for your details learning video',
            'gallery'=> 'https://mobilnitelefoni.ba/wp-content/uploads/2022/09/iphone-14-starlight-1.jpg',
        ],[
            'name'=>'SAMSUNG Z-Flip 3',
            'price'=>'50000',
            'catagory'=>'Mobile',
            'description'=>' think your individual videos are better. Because, when you join two or more videos, there are some cut at the time of joining and some parts are get missing. But thanks for your details learning video',
            'gallery'=> 'https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1662438422/Croma%20Assets/Communication/Mobiles/Images/243354_bfra3p.png?tr=w-640',
        ],
    ]);
    }
}
