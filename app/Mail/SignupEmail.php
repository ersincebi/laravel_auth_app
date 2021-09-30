<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignupEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	public function __construct(array $data){
		$this->email_data = $data;
	}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		return $this->from('ersincebi@ersincebi.com', env('MAIL_FROM_NAME'))
					->subject('Verification Mail From Laravel-App')
					->view(
							'mail.signupemail',
							[
								'email_data' => $this->email_data
							]
						);
    }
}
