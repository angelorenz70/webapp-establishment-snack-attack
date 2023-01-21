<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Announcement;
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
        // User::factory()
        //     ->count(10)
        //     ->hasAnnouncements(5)
        //     ->create();
    
        // User::factory()
        //     ->count(15)
        //     ->hasAnnouncements(3)
        //     ->create();

        // User::factory()
        //     ->count(20)
        //     ->hasAnnouncements(7)
        //     ->create();

<<<<<<< HEAD
        // User::factory()
        //      ->count(1)
        //      ->create();
=======
        User::factory()
            ->count(20)
            ->create();
>>>>>>> 3de3ec7661073a91c113a8c3b9d25be134e7d371
    }
}
