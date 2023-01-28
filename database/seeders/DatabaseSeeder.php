<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(50)->create();

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@example.com',
             'role' => 'admin',
         ]);

        // $this->call([
        //      UserSeeder::class
        // ]);
    }
}
