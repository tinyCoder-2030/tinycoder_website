<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\SocialNetwork;
use App\UserWorkshop;
use Illuminate\Http\Request;
use App\Workshop;
class UserWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::find(auth()->user()->id);
   
        return  view('frontend.userinfo',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'child_name' => 'required',
            'parent_name' => 'required',
            'age' => 'required',
            'gender' => 'required'
        ]);
        $contact = new UserWorkshop();


      
        Session::flash('alert','تم التسجيل  بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserWorkshop  $userWorkshop
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $socials = SocialNetwork::all();
        $workshop = Workshop::findOrFail($id);

        return view('frontend.workshopRegister', compact('workshop', 'socials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserWorkshop  $userWorkshop
     * @return \Illuminate\Http\Response
     */
    public function edit(UserWorkshop $userWorkshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserWorkshop  $userWorkshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserWorkshop $userWorkshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserWorkshop  $userWorkshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserWorkshop $userWorkshop)
    {
        //
    }
}
