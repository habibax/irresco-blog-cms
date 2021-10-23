<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<7;$i++) {
            DB::table('sub_categories')->insert([
                'category_id'=>rand(1,7),
                'name' => Str::random(15),
                'description' => Str::random(50),
                'addToNavbar'=> rand(0,1)

            ]);
        }
    }
}
