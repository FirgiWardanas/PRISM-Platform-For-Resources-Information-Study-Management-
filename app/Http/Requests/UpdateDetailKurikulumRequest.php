<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDetailKurikulumRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_MK'           => ['required', 'integer', 'exists:matakuliah,id_MK'],
            'semester'        => ['required', 'integer', 'between:1,8'],
            'sks'             => ['required', 'integer', 'min:1', 'max:10'],
            'bobot_teori'     => ['required', 'numeric', 'min:0', 'max:99.99'],
            'bobot_praktikum' => ['required', 'numeric', 'min:0', 'max:99.99'],
            'sesi_teori'      => ['required', 'integer', 'min:0', 'max:255'],
            'sesi_praktikum'  => ['required', 'integer', 'min:0', 'max:255'],
            'status_matkul'   => ['required', 'in:langsung,tidak langsung,pendukung'],
        ];
    }

    public function messages(): array
    {
        return [
            'id_MK.required'   => 'Matakuliah wajib dipilih.',
            'id_MK.exists'     => 'Matakuliah tidak ditemukan.',
            'semester.between' => 'Semester harus antara 1 sampai 8.',
            'sks.min'          => 'SKS minimal bernilai 1.',
            'status_matkul.in' => 'Kategori harus salah satu dari: Wajib, Pilihan, atau Pendukung.',
            'bobot_teori.required'    => 'Bobot SKS teori wajib diisi.',
            'bobot_praktikum.required'=> 'Bobot SKS praktikum wajib diisi.',
            'sesi_teori.required'     => 'Jam/sesi teori wajib diisi.',
            'sesi_praktikum.required' => 'Jam/sesi praktikum wajib diisi.',
        ];
    }
}