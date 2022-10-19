<?php

namespace Database\Seeders;

use App\Actions\Fortify\CreateNewUser;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@unistart.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'status' => 1,
        ];
        $createUser = New CreateNewUser();
        $user = $createUser->create($admin);
    }
}
