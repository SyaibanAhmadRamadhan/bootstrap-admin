<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:15'],
            'full_name' => ['required', 'string', 'max:50'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
            'phone_number' => ['string', 'max:15'],
            'bio' => ['nullable', 'string', 'max:255'],
            'date_of_birth' => ['date', 'date_format:Y-m-d'],
            'address' => ['string', 'max:255'],
            'timezone' => ['string', 'max:255'],
            'gender' => ['nullable', 'string', 'max:255'],
//            'email' => [
//                'required',
//                'string',
//                'lowercase',
//                'email',
//                'max:255',
//                Rule::unique(User::class)->ignore($this->user()->id),
//            ],
        ];
    }
}
