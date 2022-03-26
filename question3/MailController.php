<?php
namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'From abramose.11904846@lpu.in',
            'body' => ' This is a text box containing any possible message from sender.'
        ];

        Mail::to("merakiabbu@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }
}
