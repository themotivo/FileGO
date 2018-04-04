<?php

use App\Models\Users\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([

            'name'      => 'Jon Doe',
            'email'     => 'john.doe@filego.test',
            'password'  => Hash::make('secret')
        ]);
    }
}
