<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.co.id',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('admin123'),
        //     'active' => 1,
        //     'picture' => 'DefaultProfile.jpg',
        //     'website' => 'admin.com',
        //     'role' => 'admin'
        // ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
