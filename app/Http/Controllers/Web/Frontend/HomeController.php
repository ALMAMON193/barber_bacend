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
}
