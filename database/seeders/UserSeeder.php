<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()
            ->create([
                'name' => 'John Doe',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ])->assignRole('admin');

        User::factory(20)->create()->each(function ($user) {
            $user->assignRole('user');
        });
    }
}
