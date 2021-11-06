<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'ownerId' => rand(1, 10),
            'title' => Str::random(10),
            'content' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
