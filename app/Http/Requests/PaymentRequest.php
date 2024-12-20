<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'card_number' => 'required|string|max:16',
            'expiry_date' => 'required|string',
            'cvv' => 'required|string|max:3',
        ];
    }
}
