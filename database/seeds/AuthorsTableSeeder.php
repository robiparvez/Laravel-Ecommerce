<?php

use App\Author;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('authors')->delete();

        Author::create(array(
            'name'    => 'Charles Darwin',
            'surname' => 'darwin',
        ));

        Author::create(array(
            'name'    => 'Oliver Twist',
            'surname' => 'twist',
        ));

        Author::create(array(
            'name'    => 'Charles Dickens',
            'surname' => 'dickens',
        ));
    }
}
