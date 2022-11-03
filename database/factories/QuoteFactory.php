<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\Quotes;
class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        protected $model = Quotes::class;

        return [
            'quotes' => $this->faker->sentence,
        ];
    }
}
