<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
             'email'=>'required|email',
             'password'=>'required|min:8',
        ];
    }
       public function attributes()
    {
        return[
           'email' => 'عنوان البريد الإلكتروني',
        'password' => 'كلمة المرور',


        ];
    }
    public function messages(): array
{
    return [
        'email.required' => 'يرجى إدخال عنوان البريد الإلكتروني.',
        'email.email' => 'يرجى إدخال عنوان بريد إلكتروني صالح.',
        'email.unique' => 'عنوان البريد الإلكتروني مسجل بالفعل.',
        'password.required' => 'يرجى إدخال كلمة المرور.',
        'password.min' => 'يجب أن تحتوي كلمة المرور على 8 أحرف على الأقل.',
        'password.confirmed' => 'كلمة المرور غير متطابقة، يرجى التأكد من كتابتها بشكل صحيح.',
    ];
}
}
