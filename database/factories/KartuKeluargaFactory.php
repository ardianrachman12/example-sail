<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kartu_keluarga>
 */
class KartuKeluargaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $provinsiList = [
            'Aceh', 'Bali', 'Banten', 'Bengkulu', 'DI Yogyakarta', 'DKI Jakarta', 'Gorontalo', 'Jambi',
            'Jawa Barat', 'Jawa Tengah', 'Jawa Timur', 'Kalimantan Barat', 'Kalimantan Selatan', 'Kalimantan Tengah',
            'Kalimantan Timur', 'Kepulauan Bangka Belitung', 'Kepulauan Riau', 'Maluku', 'Maluku Utara',
            'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Papua', 'Papua Barat', 'Riau', 'Sulawesi Barat',
            'Sulawesi Selatan', 'Sulawesi Tengah', 'Sulawesi Utara', 'Sumatera Barat', 'Sumatera Selatan',
            'Sumatera Utara'
        ];

        return [
            'no_kartu_keluarga' => $this->faker->unique()->randomNumber(9),
            'nama_kepala_keluarga' => $this->faker->name,
            'alamat' => $this->faker->address,
            'desa' => $this->faker->word,
            'rt' => $this->faker->numberBetween(1, 20),
            'rw' => $this->faker->numberBetween(1, 20),
            'kecamatan' => $this->faker->word,
            'kabupaten' => $this->faker->word,
            'provinsi' => $this->faker->randomElement($provinsiList),
            'kode_pos' => $this->faker->postcode,
        ];
    }
}
