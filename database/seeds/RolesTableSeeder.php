<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['name' => 'Member',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('roles')->insert(['name' => 'Curator',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('roles')->insert(['name' => 'Administrator',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
    }
}
