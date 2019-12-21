<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use DataTables;
class ContactUsController extends Controller
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
                return view('backend.contact.index');
    }


    public function getData()
    {
        $data = Contact::latest()->get();
    
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('actions', function ($q)  {
        
            $view = "";
            $edit = "";
    $show="";
            $delete = "";
    
              
    
                $show = view('backend.datatable.action-view')
                ->with(['route' => route('contact.show', ['contact' => $q->id])])
                ->render();
    
            $view .= $show;
                $delete = view('backend.datatable.action-delete')
                    ->with(['route' => route('contact.destroy', ['contact' => $q->id])])
                    ->render();
           
    $view.=$delete;
                  
           
    
            return $view;
    
        })
        ->rawColumns(['actions', 'icon'])
        ->make();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('backend.contact.show',compact('contact'));
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    $contact = Contact::findOrFail($id);
    $contact->delete();
    return redirect()->route('contact.index') ->with('success','contact deleted successfully');
    }
}
