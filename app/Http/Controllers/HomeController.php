<?php

namespace App\Http\Controllers;

use App\Services\Email\Email;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    protected $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function home()
    {
        return view('home.home');
    }

    public function agriculture()
    {
        return view('activity.agriculture');
    }

    public function transport()
    {
        return view('activity.transport');
    }

    public function immobilier()
    {
        return view('activity.immobilier');
    }

    public function tourisme()
    {
        return view('activity.tourisme');
    }

    public function general_trade()
    {
        return view('activity.general_trade');
    }

    public function sendMessage()
    {
        $name = $this->request->input('name');
        $phone_number = $this->request->input('phone_number');
        $email_addr = $this->request->input('email_addr');
        $message_text = $this->request->input('message_text');

        $mail = new Email;
        $send = $mail->sendContactMessage($name, $email_addr, $phone_number, $message_text);

        if($send == true) {
            return response()->json([
                'code' => 200,
                'status' => "success",
                'contact' => $this->request->all(),
            ]);
        } else {
            return response()->json([
                'code' => 404,
                'status' => "error",
                'contact' => $this->request->all(),
            ]);
        }
    }
}
