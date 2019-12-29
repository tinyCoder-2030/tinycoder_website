<?php

namespace App\Http\Controllers\frontend;

use App\AboutUs;
use App\Blog;
use App\Http\Controllers\Controller;
use App\PhotoGallery;
use App\SocialNetwork;
use App\Testimonial;
use App\Workshop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $socials = SocialNetwork::all();
        $workshops = Workshop::latest()->paginate(3);
        $testimonials = Testimonial::all();
        $blogs = Blog::latest()->take(4)->get();

        return view('frontend.home', compact('workshops', 'testimonials', 'socials', 'blogs'));
    }
    public function blog()
    {
        $socials = SocialNetwork::all();
        $blogs = Blog::latest()->paginate(2);

        return view('frontend.blog', compact('blogs', 'socials'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $workshops = Workshop::
            where('name', 'LIKE', "%$search%")
            ->orWhere('price', 'LIKE', "%$search%")
            ->orWhere('from_date', 'LIKE', "%$search%")
            ->orWhere('detail', 'LIKE', "%$search%")
            ->paginate(6);
        if (count($workshops) == 0) {

            $workshops = Workshop::paginate(6);
        }
        $socials = SocialNetwork::all();
        return view('frontend.workshops', compact('workshops', 'socials'));
    }
    public function showBlog($id)
    {

        $socials = SocialNetwork::all();
        $blog = Blog::findOrFail($id);

        return view('frontend.showblog', compact('blog', 'socials'));
    }
    public function about()
    {
        $socials = SocialNetwork::all();
        $testimonials = Testimonial::all();
        $aboutus = AboutUs::find(1);
        return view('frontend.aboutUs', compact('aboutus', 'testimonials', 'socials'));
    }
    public function photo()
    {
        $socials = SocialNetwork::all();
        $photos = PhotoGallery::latest()->get();
        return view('frontend.photoGallery', compact('photos', 'socials'));
    }
    public function Appointment()
    {
        $socials = SocialNetwork::all();
        $photos = PhotoGallery::latest()->get();
        return view('frontend.photoGallery', compact('photos', 'socials'));
    }
}
