<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Posty;
use App\Models\User;
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
        //User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => password_hash('test', PASSWORD_DEFAULT),
        ]); */
        //User::factory(10)->create();
        /* Posty::factory()->create([
            'tytul' => 'Tytuł seedowany',
            'autor' => 'tester',
            'email' => 'tester@test.pl',
            'tresc' => 'Treść wpisu seed',
        ]); */
        $this->call(PostyTableSeeder::class);
    }
}
