<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


class MensagemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->title(),
            'mensagem' => $this->faker->title()
        ];
    }
}
