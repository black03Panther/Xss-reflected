<?php

namespace XSS_reflected\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fullname' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt($this->faker->password),
            'remember_token' => Str::random(10),
            'user_id' => $this->faker->numberBetween(1, 100),
            'job' => $this->faker->jobTitle(),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
