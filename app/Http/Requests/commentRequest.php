<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use function GuzzleHttp\default_ca_bundle;

class commentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'post_id' => 'required|integer|exists:posts,id',
            'comment' => 'required',
            'user_id' => 'required|integer',
            'parent_id' => 'nullable|integer',
        ];

        switch ($this->getMethod())
        {
            case 'POST':
                return $rules;
        }

    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

}
