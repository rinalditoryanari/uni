<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
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
                'password' => self::$password ?: '12345678',
                'role' => 2
            ])->id,
            'nim' => fake()->randomNumber(8, true),
//            'firstname' => fake()->firstName(),
//            'lastname' => fake()->lastName(),
            'namaAyah' => fake('id_ID')->name('male'),
            'namaIbu' => fake('id_ID')->name('female'),
            'tmpLahir' => fake('en_US')->state(),
            'tglLahir' =>fake()->date,
            'phone' => fake('id_ID')->phoneNumber(),
            'jns_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
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
        self::$password = $password;

        return $this;
    }
}
