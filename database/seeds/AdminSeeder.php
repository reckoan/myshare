<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $parame = [
            'name' => 'RootAdmin',
            'email' => 'totelsurvey@gmail.com',
            'password' => Hash::make('password@123'),
            
        ];

        User::create($parame);

         

    }
}
