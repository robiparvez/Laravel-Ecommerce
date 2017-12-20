<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name'     => 'Rahim',
            'email'    => 'rahim@gmail.com',
            'password' =>  Hash::make('itsrahim'),
            'admin'    => '1',
        ));

        User::create(array(
            'name'     => 'karim',
            'email'    => 'karim@yahoo.com',
            'password' => Hash::make('itskarim'),
            'admin'    => '0',
        ));

        User::create(array(
            'name'     => 'jabbar',
            'email'    => 'jabbar@live.com',
            'password' => Hash::make('itsjabbar'),
            'admin'    => '0',
        ));
    }

}

// Author::create([
//     'name'    => 'Charles Darwin',
//     'surname' => 'darwin',
// ], [
//     'name'    => 'Oliver Twist',
//     'surname' => 'twist',

// ], [
//     'name'    => 'Charles Dickens',
//     'surname' => 'dickens',

// ]);