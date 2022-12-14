<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'surname'   => 'required|between:1,20',
            'email'    => 'required|email:rfc,dns',
            'service'      => 'required|in:1,2,3,4',
            'message'  => 'required|between:5,255',
        ];
    }
}
