<?php

namespace Database\Seeders;

// import database 
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // produksi table User
        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'iqlimanuri',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin')
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(2)->create();

        // produksi table News
        News::factory(4)->create();
    }
}
