<?php

namespace App\Http\Controllers\Admin;


use App\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

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
        return view('backend.workshops.index',compact('workshops'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.workshops.create');
    }
   public function get_data(Request $request){
    $workshops = Workshop::orderBy('created_at', 'desc')->get();
    return DataTables::of($workshops)
    ->addIndexColumn()
    ->addColumn('actions', function ($q) {
        $view = "";
        $edit = "";

        $delete = "";
    

            $edit = view('backend.datatable.action-edit')
                ->with(['route' => route('workshops.edit', ['workshop' => $q->id])])
                ->render();
            $view .= $edit;

            $delete = view('backend.datatable.action-delete')
                ->with(['route' => route('workshops.destroy', ['workshop' => $q->id])])
                ->render();
            $view .= $delete;

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
            'from_date' => 'required',
            'detail' => 'required',
        ]);


       $workshop= Workshop::create($request->except('workshop_image'));
        if($request->hasFile('workshop_image')){
            $workshop->clearMediaCollection('images');
            $workshop->addMediaFromRequest('workshop_image')
            ->toMediaCollection('images');
                    }

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
        return view('backend.workshops.show',compact('workshop'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshop $workshop)
    {
        return view('backend.workshops.edit',compact('workshop'));
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
            'from_date' => 'required',
            'detail' => 'required',
        ]);


        $workshop->update($request->except('workshop_image'));

        if($request->hasFile('workshop_image')){
            $workshop->clearMediaCollection('images');
            $workshop->addMediaFromRequest('workshop_image')
            ->toMediaCollection('images');
                    }
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

        if($workshop->image()){
            $workshop->clearMediaCollection('images');
                    }
        return redirect()->route('workshops.index')
                        ->with('success','Workshop deleted successfully');
    }
}
