<?php

namespace Database\Seeders;

// use Faker\Provider\ar_JO\Persons;
use Illuminate\Database\Seeder;
use App\Models\Persons;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persons::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
        ]);
        
        Persons::create([
            'first_name' => 'Bob',
            'last_name' => 'Smith',
        ]);
    }
}
