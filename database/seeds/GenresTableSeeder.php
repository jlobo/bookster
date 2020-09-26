<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([ 'name' => 'Political', 'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        DB::table('genres')->insert([ 'name' => 'Children', 'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        DB::table('genres')->insert([ 'name' => 'Cooking', 'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        DB::table('genres')->insert([ 'name' => 'Do-It-Yourself', 'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        DB::table('genres')->insert([ 'name' => 'Biographies', 'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        DB::table('genres')->insert([ 'name' => 'Teen & Young', 'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        DB::table('genres')->insert([ 'name' => 'Happiness Self-Help', 'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
    }
}
