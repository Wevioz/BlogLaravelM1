<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rand1 = rand(1,20);
        $rand2 = rand(1,3);

        $check = DB::table('formations_categories')->where('formationId', '=', $rand1)->where('categoryId', '=', $rand2)->first();

        if($check === null) {
            DB::table('formations_categories')->insert([
                'formationId' => $rand1,
                'categoryId' => $rand2
            ]);
        }
        
    }
}
