<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SocialNetwork;
use Illuminate\Http\Request;
use DataTables;
class SocialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.social.index');
    }
    public function getData()
    {
        $data = SocialNetwork::latest()->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('actions', function ($q)  {
        
            $view = "";
            $edit = "";
                $edit = view('backend.datatable.action-edit')
                    ->with(['route' => route('socialNetwork.edit',['socialNetwork' => $q->id])])
                    ->render();
                $view .= $edit;
                  
    
            return $view;
    
        })
        ->rawColumns(['actions'])
        ->make();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SocialNetwork  $socialNetwork
     * @return \Illuminate\Http\Response
     */
    public function show(SocialNetwork $socialNetwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialNetwork  $socialNetwork
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialNetwork $socialNetwork)
    {
      
     
        return view('backend.social.edit',compact('socialNetwork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialNetwork  $socialNetwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialNetwork $socialNetwork)
    {
        $socialNetwork->update($request->all());
        return redirect()->route('socialNetwork.index')
        ->with('success','social network created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SocialNetwork  $socialNetwork
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialNetwork $socialNetwork)
    {
        //
    }
}
