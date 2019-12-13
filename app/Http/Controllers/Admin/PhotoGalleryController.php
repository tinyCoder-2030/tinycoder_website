<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;

use App\PhotoGallery;


class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->user()->hasRole('admin'))
        {
            return abort(401);
        }
                return view('backend.photoGallery.index');
    }
    public function getData()
    {
        $data = PhotoGallery::latest()->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('actions', function ($q)  {
        
            $view = "";
            $edit = "";
    $show="";
            $delete = "";
    
                $edit = view('backend.datatable.action-edit')
                    ->with(['route' => route('photoGallery.edit', ['photoGallery' => $q->id])])
                    ->render();
    
                $view .= $edit;
            
    
                $show = view('backend.datatable.action-view')
                ->with(['route' => route('photoGallery.show', ['photoGallery' => $q->id])])
                ->render();
    
            $view .= $show;
                $delete = view('backend.datatable.action-delete')
                    ->with(['route' => route('photoGallery.destroy', ['photoGallery' => $q->id])])
                    ->render();
           
    $view.=$delete;
                  
           
    
            return $view;
    
        })
        ->addColumn('photo', function ($q){
            if($q->image())
{
$show =$q->image();
return $show;
 }
})
        ->rawColumns(['actions', 'icon','photo'])
        ->make();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.photoGallery.create');
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
            'title' => 'required',
            'description' => 'required',
           
            ]);
            $PhotoGallery = PhotoGallery::create($request->except('image'));
            if($request->hasFile('image'))
    {
    
            $PhotoGallery->clearMediaCollection('images');
            $PhotoGallery->addMediaFromRequest('image')
            ->toMediaCollection('images');
    
                 
    }
    
    return redirect()->route('photoGallery.index')
    ->with('success','photo Gallery created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoGallery $photoGallery)
    {
        return view('backend.photoGallery.show',compact('photoGallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoGallery $photoGallery)
    {
     

        return view('backend.photoGallery.edit',compact('photoGallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhotoGallery $photoGallery)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
           
            ]);
            $photoGallery->update($request->except('image'));
            if($request->hasFile('image'))
    {
    
            $photoGallery->clearMediaCollection('images');
            $photoGallery->addMediaFromRequest('image')
            ->toMediaCollection('images');
    
                 
    }
    
    return redirect()->route('photoGallery.index')
    ->with('success','photo Gallery created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoGallery $photoGallery)
    {
        $photoGallery->delete();
        if($photoGallery->image()){
            $photoGallery->clearMediaCollection('images');
                    }
        return redirect()->route('photoGallery.index') ->with('success','photoGallery deleted successfully');
    }
}
