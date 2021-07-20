<?php
 
namespace App\Http\Controllers;
 
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
 
class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request)
    {
        //Mail::to('altman_mike@yahoo.fr')
            //->send(new Contact($request->except('_token')));
        Mail::to('altman_mike@yahoo.fr')
            ->queue(new Contact($request->except('_token')));   // queue problem à voir
        return view('confirm');
    }
}
