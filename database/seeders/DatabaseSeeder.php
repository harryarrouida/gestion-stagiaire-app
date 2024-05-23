<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Filliere;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Filliere::create([
                'name' => str()->random(10),
                'description' => str()->random(10),
            ]);
        }

        Admin::create([
            'fname' => 'hamza',
            'lname' => 'arrouida',
            'email' => 'hamza@gmail.com',
            'password' => bcrypt('hamza1234'),
        ]);
        Admin::create([
            'fname' => 'achrraf',
            'lname' => 'bouyzrou',
            'email' => 'achrraf@gmail.com',
            'password' => bcrypt('achrraf1234'),

        ]);
    }
}
