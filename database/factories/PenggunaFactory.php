<?php

namespace Database\Factories;

use App\Models\Pengguna;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengguna>
 */
class PenggunaFactory extends Factory
{
    protected $model = Pengguna::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->unique()->safeEmail(),
            'password'=>Hash::make('password'),
            'gender'=>fake()->randomElement(['male','female']),
            'instagram'=>fake()->url(),
            'phone'=>fake()->phoneNumber(),
            'hobbies'=>fake()->sentence(3,true),
            'wallet_id'=>Wallet::factory()
        ];
    }
}
