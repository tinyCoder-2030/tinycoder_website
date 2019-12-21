<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Http\Request;
use DataTables;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
class BlogController extends Controller
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
                return view('backend.blog.index');
    }
    public function getData()
    {
        $data = Blog::latest()->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('actions', function ($q)  {
        
            $view = "";
            $edit = "";
    $show="";
            $delete = "";
    
                $edit = view('backend.datatable.action-edit')
                    ->with(['route' => route('blog.edit', ['blog'=> $q->id])])
                    ->render();
    
                $view .= $edit;
            
    
                $show = view('backend.datatable.action-view')
                ->with(['route' => route('blog.show', ['blog'=> $q->id])])
                ->render();
    
            $view .= $show;
                $delete = view('backend.datatable.action-delete')
                    ->with(['route' => route('blog.destroy', ['blog'=> $q->id])])
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
        return view('backend.blog.create');
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
            'abstract' => 'required',
            'content' => 'required',
           
            ]);
            $blog = Blog::create($request->except('image'));
            $blog->user_id=auth()->user()->id;
            $blog->save();
            if($request->hasFile('image'))
    {
    
            $blog->clearMediaCollection('images');
            $blog->addMediaFromRequest('image')
            ->toMediaCollection('images');
    
                 
    }
    
    return redirect()->route('blog.index')
    ->with('success','photo Gallery created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('backend.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
       
        return view('backend.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        request()->validate([
            'title' => 'required',
            'abstract' => 'required',
            'content' => 'required',
           
            ]);
            $blog->update($request->except('image'));
            $blog->user_id=auth()->user()->id;
            $blog->save();
            if($request->hasFile('image'))
    {
    
            $blog->clearMediaCollection('images');
            $blog->addMediaFromRequest('image')
            ->toMediaCollection('images');
    
                 
    }
    
    return redirect()->route('blog.index')
    ->with('success','photo Gallery created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        if($blog->image()){
            $blog->clearMediaCollection('images');
                    }
        return redirect()->route('blog.index') ->with('success','blog deleted successfully');
    }
}
