<?php

namespace App\Listeners;

use App\Events\UserSubscribed;
use App\Mail\UserSubscribedMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use DB;

class EmailOwnerAboutSubscription implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserSubscribed $event)
    {
        //
    //   $env_mail=  env('MAIL_USERNAME');
    //   dd($mail1);
    //   $emails = [$event->email,$env_mail];
    
        DB::table('newsletter')->insert([
            'email'=>$event->email
        ]);

        $details = [
            'title' => 'Subscribed Successfully',
            'body' => 'This is for testing email using smtp'
        ];

        $mail= Mail::to($event->email)->send(new \App\Mail\UserSubscribedMessage($details));
           
    }
}
