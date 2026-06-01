<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSilabusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'deskripsi'     => ['nullable', 'string', 'max:5000'],
            'cpm'           => ['nullable', 'string', 'max:5000'],
            'cpk'           => ['nullable', 'string', 'max:5000'],
            'bahan_pustaka' => ['nullable', 'string', 'max:5000'],
            'file_rps'      => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:10240'],
        ];
    }

    public function messages(): array
    {
        return [
            'file_rps.mimes' => 'File RPS harus berformat PDF, DOC, atau DOCX.',
            'file_rps.max'   => 'Ukuran file RPS maksimal 10 MB.',
        ];
    }
}
