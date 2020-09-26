<?php

use Illuminate\Database\Seeder;

class ManufactorersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufactorers')->insert([
            'name' => 'Apple', 'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufactorers')->insert([
            'name' => 'Samsung', 'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufactorers')->insert([
            'name' => 'Microsoft', 'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
