<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BedroomRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'description' => 'string|required',
            'capacity' => 'integer|required' 
        ];
    }
}
