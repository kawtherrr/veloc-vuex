<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgencyGoogleSignupRequest extends FormRequest
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
            'name' => ['required','string'],
            'email' => ['required','string','email','unique:users'],
            'phone' => ['required', 'numeric', 'min:10'],
            'agency_name' => ['required','string'],
            'agency_address' => ['required','string'], 
            'wilaya' => ['required'],
            'city' => ['required'],
            'google_id' => ['string'],    
            'working_days' => ['required'],
            'car_models' => ['required'],  
            'opening_hour' => ['required'],
            'closing_hour' => ['required'],
        ];
    }
}
