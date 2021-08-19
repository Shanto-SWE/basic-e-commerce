<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([

        "name"=>"samsung galaxy A72",
         "price"=>"200",
         "catagory"=>"phone",
         "des"=>"samsung phone",
         "photo"=>"https://www.themashbom.com/deestoar/2021/03/Samsung-Galaxy-A52-1-600x600.jpg"
          
        ]);
    }
}
