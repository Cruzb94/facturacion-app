<?php

namespace Database\Seeders;

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
         \App\Models\User::create([
            'name' => 'Cruz Brito',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'rol' => 'admin',
        ]);

          \App\Models\User::create([
            'name' => 'Cruz Brito',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'rol' => 'user',
        ]);
          
         \App\Models\User::factory(10)->create();
         \App\Models\Products::factory(10)->create();
        
    }
}
