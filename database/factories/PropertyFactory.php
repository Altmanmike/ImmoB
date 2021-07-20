<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::all(); // normalement on met users et on foreach
        
        return [
            //
            'title' => $toSlug=$this->faker->sentence,
            'category_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'type' => 'T'.strval($this->faker->numberBetween($min = 1, $max = 6)),
            'furnished' =>  $this->faker->randomElement($array = array ('Non meublé!','Meublé!')),
            'photo' => $this->faker->imageUrl($width = 400, $height = 300, 'appartment'),
            'rooms' => $this->faker->numberBetween($min = 1, $max = 4),
            'area' => $this->faker->numberBetween($min = 25, $max = 150),
            'description' =>$this->faker->text(600),
            'price' => $this->faker->numberBetween($min = 200, $max = 900),
            'user_id' => $userId=$this->faker->numberBetween($min = 1, $max = 10),
            'user_phone' => $user[$userId-1]->phone,
            'user_mail' => $user[$userId-1]->mail,
            'slug' => $this->faker->slugify($toSlug)
        ];
    }
}
