<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Add_EmployeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'employee_name'=> ['required', 'string'],
            'address'=> ['required', 'string'],
            'birthdate'=> ['required'],
            'phone'=> ['required'],
            'national_number'=> ['required'],
            'gender'=> ['required'],
            'department'=> ['required', 'string'],
            'position'=> ['required', 'string'],
            'salary'=> ['required'],
            'available'=> ['required'],

            'image'=> ['required','image','mimes:png,jpg,jpeg,gif'],
            'identity' => ['required','image','mimes:png,jpg,jpeg,gif'],
            'criminal_record' => ['required','image','mimes:png,jpg,jpeg,gif']

        ];
    }
}
