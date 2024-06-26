<?php

namespace App\Services\Email;

/**
 * installation
 * - composer require phpmailer/phpmailer
 */

use App\Services\Device\Device;
use DateTime;
use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    protected $mail;
    protected $app_name;
    protected $username;

    function __construct()
    {
        $this->app_name = config('app.name'); 
        $this->username = config('app.mail_username');

        $this->mail = new PHPMailer;
        $this->mail->isSMTP();
        $this->mail->SMTPDebug = 0; //pas d'afficahe de debug mais si nous voulons afficher les erreurs il faut le mettre à 2
        $this->mail->Port = config('app.mail_port'); 
        $this->mail->Host = config('app.mail_host'); 
        $this->mail->SMTPAuth = true;
        $this->mail->Username = $this->username;
        $this->mail->Password = config('app.mail_password');
        $this->mail->CharSet  = "UTF-8";
    }

    //pour l'envoie du mail
    public function sendEmail($subject, $emailUser, $name, $message, $isHtml)
    {
        $this->mail->Subject = $subject;
        $this->mail->setFrom($emailUser, $name); //from contact user email
        $this->mail->addReplyTo($emailUser, $name); //
        $this->mail->addAddress(config('app.email')); //to entreprise email
        $this->mail->IsHTML($isHtml);
        $this->mail->Body = $message;

        return $this->mail->send(); //true or false

        //ici c'est pour le teste et voir les erreurs
        /*if(!$this->mail->send())
        {
            return "error : " . $this->mail->ErrorInfo;
        }
        else
        {
            return "success";
        }*/
    }

    public function sendContactMessage($fullname, $email_addr, $phoneNumber, $message_text)
    {
        $email = $email_addr;
        $name = $fullname;
        $phone_number = $phoneNumber;
        $message = $message_text;

        $subject = __('home.information');
        $messageHtml = view('email.message-email')
                    ->with([
                        'name' => $name,
                        'message' => $message,
                        'phone_number' => $phone_number,
                        'email' => $email
            ]);

        return $this->sendEmail($subject, $email, $name, $messageHtml, true);
    }
}