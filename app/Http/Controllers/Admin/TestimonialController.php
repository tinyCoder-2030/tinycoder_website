<?php

namespace App\Http\Controllers\Admin;

use App\Testimonial;
use DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
class TestimonialController extends Controller
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
        return view('backend.testimonials.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonials.create');
    }
public function getData()
{
    $data = Testimonial::latest()->get();
    return DataTables::of($data)
    ->addIndexColumn()
    ->addColumn('actions', function ($q)  {
    
        $view = "";
        $edit = "";
$show="";
        $delete = "";

            $edit = view('backend.datatable.action-edit')
                ->with(['route' => route('testimonials.edit', ['testimonial' => $q->id])])
                ->render();

            $view .= $edit;
        

            $show = view('backend.datatable.action-view')
            ->with(['route' => route('testimonials.show', ['testimonial' => $q->id])])
            ->render();

        $view .= $show;
            $delete = view('backend.datatable.action-delete')
                ->with(['route' => route('testimonials.destroy', ['testimonial' => $q->id])])
                ->render();
       
$view.=$delete;
              
       

        return $view;

    })
    ->rawColumns(['actions', 'icon'])
    ->make();
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
        'occupation' => 'required',
        'content' => 'required',
        ]);
        $testimonial = Testimonial::create($request->except('image'));
        if($request->hasFile('image'))
{

        $testimonial->clearMediaCollection('images');
        $testimonial->addMediaFromRequest('image')
        ->toMediaCollection('images');

             
}

return redirect()->route('testimonials.index')
->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('backend.testimonials.show',compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  $testimonial = Testimonial::findOrFail($id);

        return view('backend.testimonials.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        request()->validate([
            'name' => 'required',
            'occupation' => 'required',
            'content' => 'required',
            ]);
            $testimonial->update($request->except('image'));
            if($request->hasFile('image'))
    {
    
            $testimonial->clearMediaCollection('images');
            $testimonial->addMediaFromRequest('image')
            ->toMediaCollection('images');
    
           
             
    }
    return redirect()->route('testimonials.index')
    ->with('success','User created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        if($testimonial->image()){
            $testimonial->clearMediaCollection('images');
                    }
        return redirect()->route('testimonials.index') ->with('success','Testimonial deleted successfully');
    }
}
