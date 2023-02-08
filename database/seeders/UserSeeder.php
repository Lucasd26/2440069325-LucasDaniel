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
        User::insert([
            [
                'first_name' => 'Lucas',
                'last_name' => 'Daniel',
                'email' => 'lucas.daniel@binus.ac.id',
                'avatar_link' =>'https://tabib.ae/uploads/profile/free-profile-photo-whatsapp-4_1617693292_1625640135.png',
                'role_id' => 1,
                'gender_id' => 1,
                'password' => Hash::make('lucas123')
            ],
            [
                'first_name' => 'user',
                'last_name' => 'pertama',
                'email' => 'userpertama@gmail.com',
                'avatar_link' =>'https://tabib.ae/uploads/profile/free-profile-photo-whatsapp-4_1617693292_1625640135.png',
                'role_id' => 2,
                'gender_id' => 2,
                'password' => Hash::make('user1')
            ],
        ]);
    }
}
