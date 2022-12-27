<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $user1 = User::create([
            'name' => 'admin ',
            'email' => 'admin@gmail.com',
            'type_id' => 0,
            'password' => Hash::make('12345'),
        ]);
    }
}
