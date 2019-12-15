<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Workshop;
use App\PhotoGallery;
use App\Testimonial;
use App\SocialNetwork;
use App\AboutUs;
class HomeController extends Controller
{
    public function index(){
    $socials = SocialNetwork::all();
    $workshops=Workshop::all();
    $testimonials=Testimonial::all();
        return view('welcome',compact('workshops','testimonials','socials'));
    } 
    
    public function about(){
        $socials = SocialNetwork::all();
        $testimonials=Testimonial::all();
        $aboutus=AboutUs::find(1);
        return view('aboutUs',compact('aboutus','testimonials','socials'));
    }
    public function photo(){
        $socials = SocialNetwork::all();
        $photos = PhotoGallery::latest()->get();
        return view('frontend.photoGallery',compact('photos','socials'));
    }
    public function Appointment(){
        $socials = SocialNetwork::all();
        $photos = PhotoGallery::latest()->get();
        return view('frontend.photoGallery',compact('photos','socials'));
    }
}
