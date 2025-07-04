<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StageRequest extends FormRequest
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
            'stages' => 'required|array',
            'stages.*.name' => 'required|string|distinct|unique:stage_translations,name',
            'stages.*.desc' => 'nullable|string',
            'stages.*.slug' => 'required_without:id|string',
        ];
    }
    public function messages()
    {
        return [
            'stages.*.name.unique' => 'اسم المرحلة ":input" مستخدم من قبل.',
            'stages.*.slug.unique' => 'المعرف ":input" مستخدم بالفعل، يرجى اختيار معرف مختلف.',
        ];
    }

    public function attributes()
    {
        return [
            'stages.*.name' => 'اسم المرحلة',
            'stages.*.slug' => 'الإسم بالرابط',
            'stages.*.desc' => 'الوصف',
        ];
    }
}
