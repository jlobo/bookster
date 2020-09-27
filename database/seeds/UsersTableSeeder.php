<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'reeds@hotmail.com',
            'name' => 'Bartleby Scrivner',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'laird@att.net',
            'name' => 'No Longer Amused',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'curly@icloud.com',
            'name' => 'Jim Davidson',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'louise@comcast.net',
            'name' => 'Hellen Caudle',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'mastinfo@comcast.net',
            'name' => 'Amazon Customer',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'sethbrown@,icloud.com',
            'name' => 'Dawn',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'cfhsoft@icloud.com',
            'name' => 'Kathryn Woodard',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'gospodin@icloud.com',
            'name' => 'Christine Harrison',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'mschilli@outlook.com',
            'name' => 'Amazon Customer',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('users')->insert([
            'email' => 'jully@book.com',
            'name' => 'Jully',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 2,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        

        DB::table('users')->insert([
            'email' => 'natha@book.com',
            'name' => 'Nathaly',
            'password' => bcrypt('123456'),
            'approved' => true,
            'role_id'  => 3,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
