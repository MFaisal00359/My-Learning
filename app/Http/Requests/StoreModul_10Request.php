<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreModul_10Request extends FormRequest
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
            'judul_modul_10' => 'required|max:200|min:5',
            'foto_modul_10' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link_modul_10' => 'required',
        ];
    }
}
