<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public  function contact(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'number' => 'required',
            'message' => 'required'
        ]);

        $res = Contact::create($request->all());

        if($res) {
            $msg = json_encode(['result' => "success", 'message' => "<strong>Success!</strong> Thanks for contacting us!"]);
        } else {
            $msg = json_encode(['result' => "error", 'message' => "<strong>Erorr!</strong> Please check form data!"]);
        }
        return $msg;
    }
    
    public function mail(Request $request)
    {
        $email = $request->input('email');
        $full_name = $request->input('full_name');
        $number = $request->input('number');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $mesage = "Message from " . $full_name . " Number: " . $number . " Message: " .$message;
        /*if(mail('mishakagar@gmail.com', $subject, $message)) {
            return redirect('http://bumeengroup.com/');
        }*/

        $to      = 'mishakagar@gmail.com';
        $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if(mail($to, $subject, $message, $headers)) {
            return "ok";
        }

         dd(error_get_last());;
    }
}
