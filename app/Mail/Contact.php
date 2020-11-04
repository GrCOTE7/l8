<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
  use Queueable;
  use SerializesModels;

  /**
   * Elements de contact.
   *
   * @var array
   */
  public $contact;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(array $contact)
  {
    $this->contact = $contact;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->from('monsite@chezmoi.com')
      ->view('emails.contact');
  }
}
