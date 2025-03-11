<?php

namespace App\Http\Controllers\Web\Backend\Admin;

use App\Helpers\Helper;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\ServiceImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceImageController extends Controller
{
    public function index(Request $request)
    {
        $services_images = ServiceImage::with('services')->get();
        return view('backend.admin.layouts.service-image.index', compact('services_images'));
    }

    public function create()
    {
        $services = Service::all();
        return view('backend.admin.layouts.service-image.create', compact('services'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'service_id' => 'required|exists:services,id',
            'image_path' => 'required|array|max:10',
            'image_path.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:204800',
        ]);

        // Upload multiple image files
        $multipleImages = $request->file('image_path');
        foreach ($multipleImages as $file) {
            $randomString = Str::random(10);
            $documentUrl = Helper::fileUpload($file, 'service/images', $randomString);

            // Save each image to the database
            $serviceImage = new ServiceImage();
            $serviceImage->service_id = $request->service_id;
            $serviceImage->image_path = $documentUrl;
            $serviceImage->save();
        }
        return redirect()->route('admin.service.image.index')->with('success', 'Service images uploaded successfully!');
    }
}