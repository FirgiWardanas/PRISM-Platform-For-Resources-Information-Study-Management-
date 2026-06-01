<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDetailKurikulumRequest extends FormRequest
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
            'bobot_teori'     => ['nullable', 'numeric', 'min:0', 'max:99.99'],
            'bobot_praktikum' => ['nullable', 'numeric', 'min:0', 'max:99.99'],
            'sesi_teori'      => ['nullable', 'integer', 'min:0', 'max:255'],
            'sesi_praktikum'  => ['nullable', 'integer', 'min:0', 'max:255'],
            'status_matkul'   => ['required', 'in:langsung,tidak langsung,pendukung'],
            'deskripsi'       => ['nullable', 'string', 'max:5000'],
            'cpm'             => ['nullable', 'string', 'max:5000'],
            'cpk'             => ['nullable', 'string', 'max:5000'],
            'bahan_pustaka'   => ['nullable', 'string', 'max:5000'],
            'file_rps'        => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:10240'],
        ];
    }

    public function messages(): array
    {
    return [
        'id_MK.required'          => 'Matakuliah wajib dipilih.',
        'id_MK.exists'            => 'Matakuliah tidak ditemukan.',
        'semester.between'        => 'Semester harus antara 1 sampai 8.',
        'sks.min'                 => 'SKS minimal bernilai 1.',
        'sks.max'                 => 'SKS maksimal bernilai 10.',
        'status_matkul.in'        => 'Kategori harus salah satu dari: Wajib, Pilihan, atau Pendukung.',
        'bobot_teori.max'         => 'Bobot SKS teori maksimal 99.99.',
        'bobot_praktikum.max'     => 'Bobot SKS praktikum maksimal 99.99.',
        'sesi_teori.max'          => 'Jam/sesi teori maksimal 255.',
        'sesi_praktikum.max'      => 'Jam/sesi praktikum maksimal 255.',
    ];
    }
}