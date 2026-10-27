<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_pelanggan' => $this->faker->unique()->numerify('PLG-####'),
            'nama' => $this->faker->name(),
            'kategori' => $this->faker->randomElement(['Reguler', 'Premium', 'VIP']),
            'email' => $this->faker->unique()->safeEmail(),
            'tanggal_daftar' => $this->faker->date(),
            'alamat' => $this->faker->address(),
            'keterangan' => $this->faker->optional()->sentence(),
        ];
    }
}
