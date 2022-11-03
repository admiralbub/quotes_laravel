<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\Quotes;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quotes>
 */
class QuotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         $model = Quotes::class;

        return [
            'quotes' => $this->faker->sentence,
        ];
    }
}
