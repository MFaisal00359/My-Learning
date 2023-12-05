<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBeasiswa_linkRequest extends FormRequest
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
            'nama_beasiswa' => 'required|max:200|min:5',
            'foto_beasiswa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link_beasiswa' => 'required',
        ];
    }
}
