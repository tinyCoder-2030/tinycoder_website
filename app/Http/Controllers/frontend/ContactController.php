<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ ContactMail;
use Illuminate\Http\Request;
use App\SocialNetwork;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = SocialNetwork::all();
      return view('frontend.contactus',compact('socials')); 
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->number = $request->number;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        // Mail::send(to($email, 'Tiny Coders')
        // ->text($request->message)
        // ->subject(__('Contact us', ['app_name' => 'Tiny Coders']))
        // ->from($request->email, $request->name)
        // ->replyTo($this->request->email, $request->name));
        Mail::send(new  ContactMail($request));

      
        Session::flash('alert','تم إرسال الإيميل بنجاح');
        return redirect()->back();
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
