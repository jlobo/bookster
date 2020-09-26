<?php

use Illuminate\Database\Seeder;

class BooksAuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books_authors')->insert(['book_id' => 1, 'author_id' => 1, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);

        DB::table('books_authors')->insert(['book_id' => 2, 'author_id' => 2, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 3, 'author_id' => 3, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 3, 'author_id' => 4, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 4, 'author_id' => 5, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 5, 'author_id' => 6, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 5, 'author_id' => 7, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 6, 'author_id' => 8, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 6, 'author_id' => 9, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 6, 'author_id' => 10, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 7, 'author_id' => 11, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 8, 'author_id' => 12, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 9, 'author_id' => 13, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
        
        DB::table('books_authors')->insert(['book_id' => 10, 'author_id' => 14, 'updated_at' => DB::raw('CURRENT_TIMESTAMP')]);
    }
}
