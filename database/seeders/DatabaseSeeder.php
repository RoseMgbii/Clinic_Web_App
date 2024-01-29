<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\People;
use App\Models\Role;
use Database\Factories\PeopleFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::create(['name'=> 'doctor']);
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'patient']);

        //Create 5 dummy People records
        People::factory(5)->create();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
