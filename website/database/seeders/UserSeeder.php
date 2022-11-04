<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'dalitso',
                'email' => 'dalitsosawati@gmail.com',
                'password' => Hash::make('1234'),
            ],
        ];

        User::insert($users);

    }
}
