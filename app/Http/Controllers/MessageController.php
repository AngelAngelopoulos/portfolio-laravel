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

        //$recaptcha = $request['g-recaptcha-response'];
	//dd($request);
        if (isset($request['g-recaptcha-response'])) {
        $captcha = $request['g-recaptcha-response'];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
        'secret' => '6LfHuMQZAAAAAIJ6SWSWkLDeY-RjflUyYiOdOCjv',
        'response' => $captcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
        );
	//dd($data);
        $curlConfig = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $data
        );

        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);
        curl_close($ch);
        }
	//dd($response);

        //$jsonResponse = json_decode($response);
      	$captcha_success = json_decode($response);
	//dd($captcha_success);

      	if ($captcha_success->success) {
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
          $email->setFrom("contacto@angelalvarado.cf", "Contacto");
          $email->setSubject("Mensaje de contacto de ".$message['email']);
          $email->addTo("angel.alvarado.dev@gmail.com");
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
      else
      {
        return redirect()->back()->with('status', 'Error, fill the captcha please');
      }
    }

    public function style(Request $request) {
        return route('css/app.css');
    }
}
