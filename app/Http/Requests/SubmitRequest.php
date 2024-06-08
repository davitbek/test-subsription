<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191',
            'message' => 'required|string|max:65535',
        ];
    }
}
