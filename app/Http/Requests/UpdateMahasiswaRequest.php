<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
            return [
                'Nim' => $this->Nim,
                'Nama' => $this->Nama,
                // 'featured_image' => $this->feature_image,
                'Tanggal_Lahir' => $this->Tanggal_Lahir,
                'Kelas' => $this->kelas_id,
                "Jurusan" => strtoupper($this->Jurusan),
                'No_Handphone' => $this->No_Handphone,
                'Email' => $this->Email,
            ];
        
    }
}
