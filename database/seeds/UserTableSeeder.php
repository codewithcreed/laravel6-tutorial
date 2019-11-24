<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Faisal Islam',
            'email' => 'me@codewithcreed.com',
            'password' => Hash::make('secret')
        ];

        if (! $userModel = \App\User::whereEmail($user['email'])->first()) {
            $userModel = \App\User::create($user);
        }

        echo $userModel;
    }
}
