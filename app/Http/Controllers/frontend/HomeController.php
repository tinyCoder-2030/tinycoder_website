<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Workshop;
use App\PhotoGallery;
use App\Testimonial;
class HomeController extends Controller
{
    public function index(){
    $workshops=Workshop::all();
    $testimonials=Testimonial::all();
        return view('welcome',compact('workshops','testimonials'));
    } 
    
    public function about(){
        return view('aboutUs');
    }
    public function photo(){
        $photos = PhotoGallery::latest()->get();
        return view('frontend.photoGallery',compact('photos'));
    }
}
