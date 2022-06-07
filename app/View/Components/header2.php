<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Contact;

class header2 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $email =  Contact::where('name','Email')->first();
        $phone =  Contact::where('name','Phone')->first();
        $facebook =  Contact::where('name','Facebook')->first();
        $twitter =  Contact::where('name','Twitter')->first();
        $youtube =  Contact::where('name','Youtube')->first();
        $googlePlay =  Contact::where('name','Google Play')->first();
        
        return view('components.header2', ['email' => $email])
        ->with('phone', $phone)
        ->with('facebook', $facebook)
        ->with('twitter', $twitter)
        ->with('youtube', $youtube)
        ->with('googlePlay', $googlePlay);
    }
}