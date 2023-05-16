<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(4)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::create([
            'name' => 'Raifan',
            'email' => 'raifan@gmail.com',
            'password' => bcrypt('12345'),
            'address' => 'bogor',
            'phone' => '0895383255074',
            'role' => 'Admin',
            'Admin' => '1',
        ]);
    }


}
