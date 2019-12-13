<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Workshop;
use App\PhotoGallery;
use App\Testimonial;
use App\AboutUs;
class HomeController extends Controller
{
    public function index(){
    $workshops=Workshop::all();
    $testimonials=Testimonial::all();
        return view('welcome',compact('workshops','testimonials'));
    } 
    
    public function about(){
        $testimonials=Testimonial::all();
        $aboutus=AboutUs::find(1);
        return view('aboutUs',compact('aboutus','testimonials'));
    }
    public function photo(){
        $photos = PhotoGallery::latest()->get();
        return view('frontend.photoGallery',compact('photos'));
    }
}
