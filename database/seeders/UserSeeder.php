<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'     => 'adm',
            'email'    => 'admin@aol.com',            
            'password' => Hash::make('admin'),
            'phone' => '+33 7 70 91 96 66',
            'role'     => User::ADMIN_ROLE
        ]);

        $faker = Factory::create('fr_FR');
        //dd($faker)
        for($i=0; $i<9; $i++)
        {
            User::create([
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'phone' => $faker->phoneNumber(),
            'role'     => User::ADMIN_ROLE
            ]);
        }       
    }
}