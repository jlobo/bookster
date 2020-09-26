<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
        'first_name' => 'Bob',
        'last_name' => 'Woodward',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Dav',
        'last_name' => 'Pilkey',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Jana',
        'last_name' => 'Kramer',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Michael',
        'last_name' => 'Caussin',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Candace',
        'last_name' => 'Owens',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Clea',
        'last_name' => 'Shearer',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Joanna',
        'last_name' => 'Teplin',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Ruth Bader',
        'last_name' => 'Ginsburg',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Mary',
        'last_name' => 'Hartnett',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Wendy W.',
        'last_name' => 'Williams',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Stephenie',
        'last_name' => 'Meyer',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Jessie James',
        'last_name' => 'Decker',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
            
        DB::table('authors')->insert([
        'first_name' => 'Allie',
        'last_name' => 'Brosh',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',    
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);

        DB::table('authors')->insert([
        'first_name' => 'Jay',
        'last_name' => 'Shetty',
        'birth' => '1990-09-29',
        'nationality' => 'Australia',
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
    }
}
