<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ];

        if (!$this->has('id')) {
            $rules['image'] = ['required', 'file', 'mimes:jpg,jpeg,png', 'max:5120'];
        } else {
            $rules['image'] = ['nullable', 'file', 'mimes:jpg,jpeg,png', 'max:5120'];
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama harsus diisi',
            'description.required' => 'Deskripsi harus diisi',
            'price.required' => 'Harga harus diisi',
            'image.required' => 'Gambar harus diisi',
            'image.file' => 'Gambat harus berupa file',
            'image.mimes' => 'Gambar harus berformat jpg, jpeg, atau png',
            'image.max' => 'Gambar tidak boleh lebih dari 5MB',

        ];
    }
}
