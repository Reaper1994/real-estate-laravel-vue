<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

//        \App\Models\User::factory()->create([
//            'name' => 'Admin',
//            'email' => 'realtor@example.com',
//            'password' => Hash::make('Admin@123'),
//            'is_admin' => true
//        ]);
//        \App\Models\User::factory()->create([
//            'name' => 'User',
//            'email' => 'user@example.com',
//            'password' => Hash::make('Admin@123'),
//        ]);
        \App\Models\Listing::factory(10)->create([
            'by_user_id' => 1,
        ]);
        \App\Models\Listing::factory(10)->create([
            'by_user_id' => 2
        ]);
    }
}
