<?php

namespace App\Mail;
use App\SocialNetwork;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * SendContact constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = SocialNetwork::find(3);
 
   return $this->from($this->request->email)
   ->to($email->link, 'Tiny Coders')
   ->subject(__('Contact us', ['app_name' => 'Tiny Coders']))
                ->view('frontend.mail.contact')   
                ->with([
                    'name' => $this->request->name,
                    'email' => $this->request->email,
                    'number' => $this->request->number,
                    'message' => $this->request->message,
                ]);
       
    }
}
