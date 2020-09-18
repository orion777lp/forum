<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\post;
use App\Models\subscribe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class subscribeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = subscribe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1, 3),
            'category_id'=>function() {
                return post::factory()->create()->category_id;
            },
        ];
    }
}
