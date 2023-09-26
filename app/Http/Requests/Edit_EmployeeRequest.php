<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Edit_EmployeeRequest extends FormRequest
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
            'employee_name'=> ['required'],
            'address'=> ['required'],
            'birthdate'=> ['required'],
            'phone'=> ['required'],
            'national_number'=> ['required'],
            'gender'=> ['required'],
            'department'=> ['required'],
            'position'=> ['required'],
            'salary'=> ['required'],
            'available'=> ['required'],
        ];
    }
}
