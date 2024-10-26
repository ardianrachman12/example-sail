<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateKartuKeluargaRequest extends FormRequest
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
            'no_kartu_keluarga' => [
                'required',
                'numeric',
                Rule::unique('kartu_keluargas', 'no_kartu_keluarga')->ignore($this->route('kartu_keluarga')),
            ],
            'nama_kepala_keluarga' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'desa' => 'required|string|max:255',
            'rt' => 'required|integer',
            'rw' => 'required|integer',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
        ];
    }
}
