<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return false;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'title'  => 'required|max:100',
      'detail' => 'required|max:500',
    ];
  }
}
