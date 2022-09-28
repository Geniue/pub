<?php

namespace App\Listeners;

namespace App\Listeners;
use App\Events\SendMail;
use App\Models\Invoice;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
class SendMailFired
{
    public function __construct()
    {

    }
    public function handle(SendMail $event)
    {
        $invoice = $event->invoice;
        $filename = $event->filename;
        \Mail::send('emails.InvoiceGeneration', ['invoice'=>$invoice], function($message) use ($invoice,$filename) {
            $message->to($invoice['info']['send_to']);
			$message->cc($invoice['info']['send_copy_to']);
            $message->subject('Invoice');
            $message->attach(public_path("generatepdf/$filename"));
        });
    }
}
