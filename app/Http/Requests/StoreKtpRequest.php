<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKtpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kartu_keluarga_id' => 'required|exists:kartu_keluargas,id',
            'NIK' => 'required|integer|unique:ktps,NIK',
            'nama_lengkap' => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string|max:50',
            'pendidikan' => 'required|string|max:50',
            'pekerjaan' => 'required|string|max:50',
            'status_pernikahan' => 'required|string|max:50',
            'hubungan_keluarga' => 'required|string|max:50',
            'kewarganegaraan' => 'required|string|max:50',
            'no_paspor' => 'nullable|string|max:50', // Opsional
            'no_kitas' => 'nullable|string|max:50',  // Opsional
            'nama_ayah' => 'required|string|max:100',
            'nama_ibu' => 'required|string|max:100',
        ];
    }
}
