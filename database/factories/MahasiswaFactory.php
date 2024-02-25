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
//            'first_name' => fake()->firstName(),
//            'last_name' => fake()->lastName(),
            'nama_ayah' => fake('id_ID')->name('male'),
            'nama_ibu' => fake('id_ID')->name('female'),
            'tempat_lahir' => fake('en_US')->state(),
            'tanggal_lahir' =>fake()->date,
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
        self::$password = $password;

        return $this;
    }
}
