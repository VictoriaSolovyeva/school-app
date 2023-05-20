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

        Classe::create(['name' => 'Classe 1']);
        Classe::create(['name' => 'Classe 2']);
        Classe::create(['name' => 'Classe 3']);

        Student::factory(30)->create();

    }
}
