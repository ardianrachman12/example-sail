<?php

namespace Database\Factories;

use App\Models\KartuKeluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ktp>
 */
class KtpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kartu_keluarga_id' => KartuKeluarga::inRandomOrder()->first()->id ?? KartuKeluarga::factory()->create()->id,
            'NIK' => $this->faker->unique()->nik(),
            'nama_lengkap' => $this->faker->name,
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha']),
            'pendidikan' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'S1', 'S2']),
            'pekerjaan' => $this->faker->word,
            'status_pernikahan' => $this->faker->randomElement(['Belum Menikah', 'Menikah', 'Cerai']),
            'hubungan_keluarga' => $this->faker->randomElement(['Kepala Keluarga', 'Istri', 'Anak']),
            'kewarganegaraan' => $this->faker->randomElement(['WNI', 'WNA']),
            'no_paspor' => "-",
            'no_kitas' => "-",
            'nama_ayah' => $this->faker->name,
            'nama_ibu' => $this->faker->name,
        ];
    }
}
