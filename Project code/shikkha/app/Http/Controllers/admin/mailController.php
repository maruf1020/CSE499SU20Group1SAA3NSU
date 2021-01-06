<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;


class mailController extends Controller
{
  public function sendmail(){
    $to_name = 'siam';
    $to_email = 'samarvin3@gmail.com';
    $data = array('name'=>'Ogbonna Vitalis(sender_name)', 'body' => 'A test mail');

    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)->subject('Laravel Test Mail');
$message->from('admin@admin.com','Test Mail');
});

}
}
