<?php

namespace App\Listeners;

use App\Events\EmpEvent;
use App\Models\Emp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmpWelcomeMail;

class EmpListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EmpEvent $event): void
    {
        $data['id'] = $event->emp->id;
        //dd($data['id']);
        $data['email'] = $event->emp->email;
        $data['name'] = $event->emp->name;
        Mail::to($event->emp->email)->send(new EmpWelcomeMail($data));
    }
    
}
