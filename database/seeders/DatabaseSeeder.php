<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'email' => "admin@admin.com",
            'name' => "Admin",
            'username' => "admin",
            'birthday' => "1970-01-01",
            'occupation' => 'other',
            'password' => Hash::make("password"),
            'is_admin' => 1,
        ]);
    }
}
