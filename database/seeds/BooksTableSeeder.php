<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        'title' => "Rage", 
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/41r4MsfTSxL._SX329_BO1,204,203,200_.jpg',
        'published' => '2020-09-15',
        'genre_id' => 1,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        
        DB::table('books')->insert([        
        'title' => "Dog Man: Grime and Punishment: From the Creator of Captain Underpants", 
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/51vHa3qv6NL._SX336_BO1,204,203,200_.jpg',
        'published' => '2020-09-1',
        'genre_id' => 2,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        
        DB::table('books')->insert([        
        'title' => "The Good Fight: Wanting to Leave, Choosing to Stay, and the Powerful Practice for Loving F, aithfully",
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/51gZeAUOPkL._SX331_BO1,204,203,200_.jpg',
        'published' => '2020-09-22',
        'genre_id' => 3,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        
        DB::table('books')->insert([        
        'title' => "Blackout: How Black America Can Make Its Second Escape from the Democrat Plantation", 
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/41elW0iE+iL._SX327_BO1,204,203,200_.jpg',
        'published' => '2020-09-15',
        'genre_id' => 1,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        
        DB::table('books')->insert([        
        'title' => "The Home Edit Life: The No-Guilt Guide to Owning What You Want and Organizing Everything", 
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/51AoP+4HayL._SX348_BO1,204,203,200_.jpg',
        'published' => '2020-09-15',
        'genre_id' => 4,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        
        DB::table('books')->insert([        
        'title' => "My Own Words", 
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/41DgwopRxlL._SX326_BO1,204,203,200_.jpg',
        'published' => '2018-08-7',
        'genre_id' => 5,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        
        DB::table('books')->insert([        
        'title' => "Midnight Sun", 
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/41dd3tjpdUL._SX329_BO1,204,203,200_.jpg',
        'published' => '2020-08-4',
        'genre_id' => 6,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        
        DB::table('books')->insert([        
        'title' => "Just Feed Me: Simply Delicious Recipes from My Heart to Your Plate", 
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/51GkTxH7k4L._SX402_BO1,204,203,200_.jpg',
        'published' => '2020-09-22',
        'genre_id' => 3,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        
        DB::table('books')->insert([        
        'title' => "Solutions and Other Problems", 
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/51x9nJN7YLL._SX331_BO1,204,203,200_.jpg',
        'published' => '2020-09-22',
        'genre_id' => 2,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
        
        DB::table('books')->insert([        
        'title' => "Think Like a Monk: Train Your Mind for Peace and Purpose Every Day", 
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/41GmSlYkjnL._SX329_BO1,204,203,200_.jpg',
        'published' => '2020-09-8',
        'genre_id' => 7        ,
        'updated_at' => DB::raw('CURRENT_TIMESTAMP') ]);
    }
}
