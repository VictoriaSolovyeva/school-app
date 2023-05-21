<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Student;
use \App\Models\Classe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Classe::create(['name' => 'Première classe']);
        Classe::create(['name' => 'Deuxième classe']);
        Classe::create(['name' => 'Troisième classe']);

        Student::factory(30)->create();

    }
}
