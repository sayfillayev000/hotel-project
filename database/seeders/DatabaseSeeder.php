<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
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

        Room::create([
            'name' => 'Room 1',
            'description' => 'Room 1 description',
            'price' => 10000,
            'photo' => 'rooms/room1.jpg'
        ]);
        Room::create([
            'name' => 'Room 1',
            'description' => 'Room 1 description',
            'price' => 10000,
            'photo' => 'rooms/birkishilikxona.jpg'
        ]);
        Room::create([
            'name' => 'Room 1',
            'description' => 'Room 1 description',
            'price' => 10000,
            'photo' => 'rooms/ekoxona.jpg'
        ]);
    }
}
