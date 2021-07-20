<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Property;
use App\Models\User;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        //
        Property::create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 
            'category_id' => '2',
            'type' => 'T1',
            'furnished' => 'Non meublé!',
            'photo' => 'post01.jpg',
            'rooms' => '2',
            'area' => '45',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae hic est expedita velit exercitationem quis facilis veniam animi doloribus cum non quidem inventore natus enim corrupti, possimus, voluptate magnam labore!',
            'price' => '600',
            'user_id' => '1',
            'user_phone' => 'admin@admin.com',
            'user_mail' => '+33 7 70 91 96 66',
            'slug' => 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit'
            
        ]);        

        $faker = Factory::create('fr_FR');
        //dd($faker)

        $user = User::all(); // normalement on met users et on foreach

        for($i=0; $i<11; $i++)
        {
            $instance = new Slugify();            

            Property::create([
            'title' => $toSlug=$faker->sentence,
            'category_id' => $faker->numberBetween($min = 1, $max = 2),
            'type' => 'T'.strval($faker->numberBetween($min = 1, $max = 6)),
            'furnished' =>  $faker->randomElement($array = array ('Non meublé!','Meublé!')),
            'photo' => $faker->imageUrl($width = 400, $height = 300, 'appartment'),
            'rooms' => $faker->numberBetween($min = 1, $max = 4),
            'area' => $faker->numberBetween($min = 25, $max = 150),
            'description' => $faker->text(600),
            'price' => $faker->numberBetween($min = 200, $max = 900),
            'user_id' => $userId=$faker->numberBetween($min = 1, $max = 10),
            'user_phone' => $user[$userId-1]->phone,
            'user_mail' => $user[$userId-1]->email,
            'slug' => $instance->slugify($toSlug)
            ]);
        } 
    }
}
