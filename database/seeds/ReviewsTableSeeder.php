<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'book_id' => 1,
            'rating' => 5,
            'user_id' => 1,
            'description' => 'This was meant to come out before the election and is poorly written litany of lies and slander. A has been writer trying to stay "relevant" and capitalize on TDS. How far he has fallen. Not worth a cent. Go to a bookstore and leaf through if you must read this drek.',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
            
            DB::table('reviews')->insert([
            'book_id' => 1,
            'rating' => 5,
            'user_id' => 2,
            'description' => "Woodward does it again! This time not with any hearsay. He's got Trump on tape.",
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
            
            DB::table('reviews')->insert([
            'book_id' => 1,
            'rating' => 5,
            'user_id' => 3,
            'description' => "The book arrived today, the day of release.
            The audio tape teasers on news broadcasts are captivating and damning. Woodward's interviews with Steven Colbert and Anderson Cooper are solid.
            Thus far, I've read the first five chapters and the prologue. It's an easy read in terms of writing style; the content makes a Stephen King novel seem tame.",
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
            
            DB::table('reviews')->insert([
            'book_id' => 2,
            'rating' => 5,
            'user_id' => 4,
            'description' => 'Received this book today and my daughter already finished it!!! Very good addition to the awesome Dog Man series! Very excited for the 10th book to come out!!!',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
            
            DB::table('reviews')->insert([
            'book_id' => 2,
            'rating' => 4,
            'user_id' => 5,
            'description' => 'I have to admit that I haven’t read all of the books in this series. My son loves them and so we ordered the new one right away. He read it cover to cover but got really quiet at the end. He said the ending was sad and he wanted me to read it so we could talk about it. I loved so many aspects of this book but the ending is quite emotional and may be hard for some kids to digest. The theme is love beats out hate which is amazing, maybe just pre-read it if you have a sensitive kiddo.',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
            
            DB::table('reviews')->insert([
            'book_id' => 2,
            'rating' => 5,
            'user_id' => 6,
            'description' => 'My son just turn 6 and he finish all the other 8 books by himself. So we bough this 9th copy and can’t wait to see him focus on the book for the next week or so :)',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
            
            DB::table('reviews')->insert([
            'book_id' => 3,
            'rating' => 5,
            'user_id' => 7,
            'description' => 'I absolutely loved this book so much! I feel like I’ve gained so many tools just from reading this - in marriage and any relationship! I love that they wrote this book on their own and that you get to hear from both of them. It\’s really great to see people fight for their marriage, even when dealing with really difficult circumstances!',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
            
            DB::table('reviews')->insert([
            'book_id' => 3,
            'rating' => 5,
            'user_id' => 8,
            'description' => 'This book is absolutely amazing. It\’s honest, vulnerable, and filled with so many tips and tricks to make a relationship healthy. I am not in a relationship but it\’s giving me tools to start my next relationship on the right foot while being the best version of myself.',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
            
            DB::table('reviews')->insert([
            'book_id' => 3,
            'rating' => 4,
            'user_id' => 9,
            'description' => 'It\’s even better than I imagined! So much of it speaks to my own marriage.',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
    }
}
