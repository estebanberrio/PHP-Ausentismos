<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create
        ([
         'name' => 'Juan Esteban Berrío',
         'email' => 'juanestebanberrio@gmail.com',
         'password' => bcrypt('einstein1984'),
         'status' => 'Activo'
        ]);
    }
}
