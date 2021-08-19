<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'admin',
            'email'          => 'admin@mail.com',
            'password'       => '$2b$10$8RsLpc8ECteozT75kDv0UeYPOh996jA8m4.H.1nqUBBzJD7csVFXm',
            'remember_token' => null,
            'created_at'     => '2019-06-30 14:24:02',
            'updated_at'     => '2019-06-30 14:24:02',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
