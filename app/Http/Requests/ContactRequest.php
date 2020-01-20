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
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];
    }


    // Set custom messages for contact form errors
    public function messages(){
      return [
        'name.required'    => 'You should fill in the name section',
        'subject.required' => 'You need to fill in the subject section',
        'message.required' => 'You need to fill in the message section'
      ];
    }

    // Changing the name of the atribute with errors
    public function attributes(){
      return  [
        'email' => 'email address'
      ];
    }
}
