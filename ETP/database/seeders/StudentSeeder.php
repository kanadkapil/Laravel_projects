<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{

    public function run()
    {
        Student::create([
            'name' => 'Alice',
            'email' => 'alice@example.com',
            'age' => 20,
        ]);

        Student::create([
            'name' => 'Bob',
            'email' => 'bob@example.com',
            'age' => 22,
        ]);
        Student::create([
            'name' => 'tom',
            'email' => 'tom@example.com',
            'age' => 23,
        ]);
    }
}
