<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            'title'     => 'Requem',
            'isbn'      => '1234567890',
            'price'     => '200.53',
            'cover'     => 'requem.jpg',
            'author_id' => '1',
        ]);

        DB::table('books')->insert([
            'title'      => 'twilight',
            'isbn'      => '4294967295',
            'price'     => '300.75',
            'cover'     => 'twilight.jpg',
            'author_id' => '2',

        ]);

        DB::table('books')->insert([
            'title'      => 'the girl on the train',
            'isbn'      => '1122334455',
            'price'     => '500.89',
            'cover'     => 'girltrain.jpg',
            'author_id' => '3',
        ]);
    }
}
