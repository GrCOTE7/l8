<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\RegisteredNotification;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
  use PasswordValidationRules;

  /**
   * Validate and create a newly registered user.
   *
   * @return \App\Models\User
   */
  public function create(array $input)
  {
    Validator::make($input, [
      'name'     => ['required', 'string', 'max:255'],
      'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => $this->passwordRules(),
        ])->validate();

    $user = User::create([
      'name'     => $input['name'],
      'email'    => $input['email'],
      'password' => Hash::make($input['password']),
    ]);
    $user->notify(new RegisteredNotification());

    return $user;
  }
}
