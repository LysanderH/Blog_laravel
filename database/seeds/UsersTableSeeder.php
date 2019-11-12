<?php

use App\User;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lysander',
            'email' => 'lysander.hans@hotmail.com',
            'password'=> Hash::make('azerty'),
            'role'=>'Superadmin',
            'is_author'=>'true'
        ]);
        User::create([
            'name' => 'Do',
            'email' => 'dododo111@hotmail.com',
            'password'=> Hash::make('azerty'),
            'role'=>'Editor',
            'is_author'=>'true'
        ]);
    }
}
