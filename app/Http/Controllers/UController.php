<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\App;

class UController extends Controller
{
  public function index()
  {
    $theLocale = App::getLocale();

    $msg = 'Get In Touch With Us';

    $user = User::findOrFail(1);

    $subscribers = 10;
    $textSubs    = trans_choice(__('comment|comments'), $subscribers);

    return view('u', ['msg' => $msg, 'user' => $user, 'subscribers' => $subscribers, 'textSubs' => $textSubs])->withTheLocale($theLocale);
  }
}
