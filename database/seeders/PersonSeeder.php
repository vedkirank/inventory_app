<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Person::factory(10)->create();
        // Person::create([
        //     'fname' => 'John21',
        //     'lname' => 'Doe21',
        //     'dob' => '1990-01-04',
        //     'email' => 'john21@example.com'
        // ]);
        // Person::create([
        //     'fname' => 'John',
        //     'lname' => 'Doe',
        //     'dob' => '1990-01-01',
        //     'email' => 'john@example.com'
        // ]);
        // Person::create([
        //     'fname' => 'John2',
        //     'lname' => 'Doe2',
        //     'dob' => '1990-02-01',
        //     'email' => 'john2@example.com'
        // ]);
        // Person::create([
        //     'fname' => 'John3',
        //     'lname' => 'Doe3',
        //     'dob' => '1990-03-01',
        //     'email' => 'john3@example.com'
        // ]);
        // Person::create([
        //     'fname' => 'John4',
        //     'lname' => 'Doe4',
        //     'dob' => '1990-04-01',
        //     'email' => 'john4@example.com'
        // ]);
        // Person::create([
        //     'fname' => 'John5',
        //     'lname' => 'Doe5',
        //     'dob' => '1995-01-01',
        //     'email' => 'john5@example.com'
        // ]);
        // Person::create([
        //     'fname' => 'John6',
        //     'lname' => 'Doe6',
        //     'dob' => '1990-01-01',
        //     'email' => 'john6@example.com'
        // ]);
        // Person::create([
        //     'fname' => 'John7',
        //     'lname' => 'Doe7',
        //     'dob' => '1994-01-01',
        //     'email' => 'john7@example.com'
        // ]);
        // Person::create([
        //     'fname' => 'John8',
        //     'lname' => 'Doe8',
        //     'dob' => '1993-01-01',
        //     'email' => 'john8@example.com'
        // ]);
        // Person::create([
        //     'fname' => 'John9',
        //     'lname' => 'Doe9',
        //     'dob' => '1992-01-01',
        //     'email' => 'john9@example.com'
        // ]);
        // Person::create([
        //     'fname' => 'Joh10n',
        //     'lname' => 'Doe10',
        //     'dob' => '1991-01-01',
        //     'email' => 'john10@example.com'
        // ]);
    }
}
