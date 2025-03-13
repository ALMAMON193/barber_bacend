<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::take(6)->get();
        return view('frontend.layouts.home', compact('services'));
    }

    public function Services()
    {
        $services = Service::all();
        return view('frontend.layouts.service.index', data: compact(var_name: 'services'));
    }
    public function About()
    {
        $about = Service::all();
        return view('frontend.layouts.about.index', data: compact(var_name: 'about'));
    }
    public function OurTeam()
    {
        return view('frontend.layouts.team.index');
    }
    public function Price()
    {
        return view('frontend.layouts.price.index');
    }

    public function Contact()
    {
        return view('frontend.layouts.contact.index');
    }
    public function WorkingHour()
    {
        return view('frontend.layouts.workinghour.index');
    }
    public function Teastimonial()
    {
        return view('frontend.layouts.testimonial.index');
    }
}
