<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:workshop-list|workshop-create|workshop-edit|workshop-delete', ['only' => ['index','show']]);
         $this->middleware('permission:workshop-create', ['only' => ['create','store']]);
         $this->middleware('permission:workshop-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:workshop-delete', ['only' => ['destroy']]);
    }
    /*
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::latest()->paginate(5);
        return view('workshops.index',compact('workshops'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workshops.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        Workshop::create($request->all());


        return redirect()->route('workshops.index')
                        ->with('success','Workshop created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop $workshop)
    {
        return view('workshops.show',compact('workshop'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshop $workshop)
    {
        return view('workshops.edit',compact('workshop'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshop $workshop)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);


        $workshop->update($request->all());


        return redirect()->route('workshops.index')
                        ->with('success','Workshop updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
        $workshop->delete();


        return redirect()->route('workshops.index')
                        ->with('success','Workshop deleted successfully');
    }
}
