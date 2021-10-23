<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<20;$i++)
        DB::table('posts')->insert([
            'sub_category_id'=>rand(1,7),
            'title'=>Str::random(25),
            'author'=>Str::random(16),
            'body'=>Str::random(5000),
            'description'=>Str::random(50)
        ]);
    }
}
