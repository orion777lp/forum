<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;

class postFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->text(15),
            'text'=>$this->faker->text(30),
            'category_id'=>function() {
                return category::factory()->create()->id;
            },

            //        $table->text('title');
            //        $table->text('text');
            //        $table->unsignedInteger('category_id');

        ];
    }
}
