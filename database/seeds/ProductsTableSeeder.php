<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Apple 6', 'price' => '600', 'manufactorer_id' => 1, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung note 4', 'price' => '567', 'manufactorer_id' => 2, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name' => 'Nokia 8810', 'price' => '432', 'manufactorer_id' => 3, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
