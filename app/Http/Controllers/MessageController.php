<?php

namespace App\Http\Controllers;

use App\Mail\MailReceived;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
use Monolog\Handler\SendGridHandler;
use SendGrid\Mail\Mail;

class MessageController extends Controller
{
    public function storage(Request $request){
        $message = request()->validate([
            'name'=> ['required'],
            'email' => ['required','email'],
            'subject' => ['required'],
            'message' => ['required']
        ]);


        $mail_data = new MailReceived($message);
        //dd( $mail_data-> );
        //dd($mail_data->render());


        //return new MailReceived($message);
        //Mail::to('angelsuminoe01@gmail.com')->queue(new MailReceived($message));

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("admin@angelalvarado.cf", "Contacto");
        $email->setSubject("Mensaje de contacto de ".$message['email']);
        $email->addTo("contacto@angelalvarado.cf");
        //$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
        $email->addContent(
            "text/html", (string) $mail_data->render()
        );
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            //print $response->statusCode() . "\n";
            //print_r($response->headers());
            //print $response->body() . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }

        return redirect()->back()->with('status', 'Message send successfully, we reply you within the next 24 hours');
    }

    public function style(Request $request) {
        return route('css/app.css');
    }
}
