<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'string|required'
        ];
    }
}
