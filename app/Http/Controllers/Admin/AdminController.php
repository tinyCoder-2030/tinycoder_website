<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Yajra\DataTables\Facades\DataTables;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('backend.admins.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function getData()
    {
        $data = User::role('admin')->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('actions', function ($q)  {
            
                $view = "";
                $edit = "";
    $show="";
                $delete = "";
    
                    $edit = view('backend.datatable.action-edit')
                        ->with(['route' => route('admins.edit', ['admin' => $q->id])])
                        ->render();
    
                    $view .= $edit;
                
    
                    $show = view('backend.datatable.action-view')
                    ->with(['route' => route('admins.show', ['admin' => $q->id])])
                    ->render();

                $view .= $show;
                    $delete = view('backend.datatable.action-delete')
                        ->with(['route' => route('admins.destroy', ['admin' => $q->id])])
                        ->render();
               
    $view.=$delete;
                      
                
    
                return $view;
    
            })
            ->rawColumns(['actions', 'icon'])
            ->make();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('backend.admins.create',compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
        ]);
 

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);


        $user = User::create($input);
        $user->assignRole('admin');


        return redirect()->route('admins.index')
                        ->with('success','Admin created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('backend.admins.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();


        return view('backend.admins.edit',compact('user','roles','userRole'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password'
        ]);


        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = $request->except('password');

            // $input = array_except($input,array('password'));    
        }


        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();


        // $user->assignRole($request->input('roles'));
        $user->assignRole('admin');


        return redirect()->route('admins.index')
                        ->with('success','Admin updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admins.index')
                        ->with('success','Admin deleted successfully');
    }
}