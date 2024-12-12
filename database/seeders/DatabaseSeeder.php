<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'admin']);

        Role::create(['name' => 'user']);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ])->assignRole('admin');

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user')
        ])->assignRole('user');
    }
}
