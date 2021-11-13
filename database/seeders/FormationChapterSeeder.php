<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormationChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rand1 = rand(1,20);
        $rand2 = rand(1,40);

        $check = DB::table('formations_chapters')->where('formationId', '=', $rand1)->where('chapterId', '=', $rand2)->first();

        if($check === null) {
            DB::table('formations_chapters')->insert([
                'formationId' => $rand1,
                'chapterId' => $rand2
            ]);
        }
    }
}
