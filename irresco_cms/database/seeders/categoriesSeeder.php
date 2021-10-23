<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<7;$i++) {
            DB::table('categories')->insert([
                'name' => Str::random(15),
                'description' => Str::random(50)
            ]);
        }
    }
}
