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

        //Do this
        Role::create(['name'=> 'doctor']);
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'patient']);

        //OR
        /*
        $roles = [
            [
                'name'=>'doctor'
            ],
            [
                'name'=>'admin'
            ],
            [
                'name'=>'patient'
            ]
        ];


        foreach($roles as $role){
            Role::create($role);
        }
        */
        //the second is better especially at adding new records


        //Create 5 dummy People records
//        People::factory(3)->create();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
