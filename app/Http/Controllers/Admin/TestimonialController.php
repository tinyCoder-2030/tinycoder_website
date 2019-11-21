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
        return view('backend.welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::latest()->get();
        return DataTables::of($data)
                ->addColumn('action', function($data){
                    $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
    
    dd($datat);
    }
public function getData()
{
    $data = User::latest()->get();
    return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('actions', function ($q)  {
        
            $view = "";
            $edit = "";

            $delete = "";

                $edit = view('backend.datatable.action-edit')
                    ->with(['route' => route('users.edit', ['user' => $q->id])])
                    ->render();

                $view .= $edit;
            

        
                $delete = view('backend.datatable.action-delete')
                    ->with(['route' => route('users.destroy', ['user' => $q->id])])
                    ->render();
           

            //  $view .= '<a class="btn btn-primary mb-1 mr-2" href="' . route('admin.employee.show', ['section' => $q->id]) . '">' . trans('labels.backend.sections.show_employee') . '</a>';

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
