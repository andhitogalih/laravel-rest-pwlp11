<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Nim' => $this->Nim,
            'Nama' => $this->Nama,
            'featured_image' => $this->featured_image,
            'Tanggal_Lahir' => $this->Tanggal_Lahir,
            'Kelas' => $this->kelas_id,
            "Jurusan" => strtoupper($this->Jurusan),
            'No_Handphone' => $this->No_Handphone,
            'Email' => $this->Email,
        ];
    }
}
