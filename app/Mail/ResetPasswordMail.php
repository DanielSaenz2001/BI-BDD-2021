<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\Productor;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token,$email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $user = Productor::whereEmail($this->email)->first();
        return $this->markdown('Email.passwordReset')->with([
            'user' => $user,
            'token' => $this->token
            
        ])->subject('Recuperar Contraseña')
        //->from('BuenPastor@buenpastor.edu.pe')
        ;
    }
}