<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Provider\id_ID;
use Illuminate\Database\Eloquent\Factories\Factory;
use function Laravel\Prompts\password;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{

    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create([
                'password' => self::$password  ?: '12345678',
                'role' => 1
            ])->id,
            'nik' => fake('id_ID')->nik(),
//            'first_name' => fake()->firstName(),
//            'last_name' => fake()->lastName(),
            'phone' => fake('id_ID')->phoneNumber(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'alamat' => fake('id_ID')->address(),
        ];
    }

    /**
     * Specify the password for the user.
     *
     * @param string $password
     * @return $this
     */
    public function withPassword(string $password): self
    {
        self::$password  = $password;

        return $this;
    }
}
