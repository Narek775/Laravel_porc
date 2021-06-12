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
        return true;// true grum enq vorpeszi aranac gracvel porcer anenq,false-i depqum miayn ktuylatrvi grancvacneri hamar
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>'required',
            'email'=>'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ];
    }

    public function attributes(){
        return [

            'name' => 'անուն'

        ];
    }

    public function messages() {
        return [
            'name.required' => 'Անուն դաշտը պարտադիր է',
            'email.required' => 'Email դաշտը պարտադիր է',
            'subject.required' => 'Subject դաշտը պարտադիր է',
            'message.required' => 'Message դաշտը պարտադիր է'
        ];
    }
}
