<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
      'firstname' => 'required|string',
      'lastname' => 'required|string',
      // 'cin' => 'required|string',
      'gender' => 'required|string',
      'birthday' =>'required|date',
      'email' => 'required|email|string|unique:users,email',
      'password' => [
        'required',
        // 'confirmed'
      ]
    ];
  }
}
