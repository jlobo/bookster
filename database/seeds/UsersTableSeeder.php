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
            'password' => '123456',
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'laird@att.net',
            'name' => 'No Longer Amused',
            'password' => '123456',
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'curly@icloud.com',
            'name' => 'Jim Davidson',
            'password' => '123456',
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'louise@comcast.net',
            'name' => 'Hellen Caudle',
            'password' => '123456',
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'mastinfo@comcast.net',
            'name' => 'Amazon Customer',
            'password' => '123456',
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'sethbrown@,icloud.com',
            'name' => 'Dawn',
            'password' => '123456',
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'cfhsoft@icloud.com',
            'name' => 'Kathryn Woodard',
            'password' => '123456',
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'gospodin@icloud.com',
            'name' => 'Christine Harrison',
            'password' => '123456',
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'mschilli@outlook.com',
            'name' => 'Amazon Customer',
            'password' => '123456',
            'approved' => true,
            'role_id'  => 1,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('users')->insert([
            'email' => 'jully@book.com',
            'name' => 'Jully',
            'password' => '123456',
            'approved' => true,
            'role_id'  => 2,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        

        DB::table('users')->insert([
            'email' => 'natha@book.com',
            'name' => 'Nathaly',
            'password' => '123456',
            'approved' => true,
            'role_id'  => 3,
            'email_verified_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
