<?php

namespace App\Http\Controllers\Web\Backend\Admin;

use Exception;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = Service::latest()->take(6);
                return DataTables::of($data)
                    ->addIndexColumn()

                    ->editColumn('description', function ($data) {
                        return $data->description ?? 'N/A';
                    })
                    ->addColumn('action', function ($data) {
                        return '<a href="' . route('admin.service.view', $data->id) . '" class="btn btn-primary btn-sm"><i class="ri-eye-line"></i> View</a>
                        <a href="' . route('admin.service.edit', $data->id) . '" class="btn btn-warning btn-sm"><i class="ri-edit-2-line"></i> Edit</a>
                        <a href="#" onclick="deleteAlert(' . $data->id . ')" class="btn btn-danger btn-sm"><i class="ri-delete-bin-line" id="custom-sa-warning"></i> Delete</a>';
                    })
                    ->rawColumns(['description', 'action'])
                    ->make(true);
            }
            return view('backend.admin.layouts.service.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    public function create()
    {
        return view('backend.admin.layouts.service.create');
    }
    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'is_active' => 'required|boolean',
        ]);

        // Create a new service
        Service::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'is_active' => $validated['is_active'],
        ]);

        // Redirect back to the service list with success message
        return redirect()->route('admin.service.index')->with('success', 'Service created successfully!');
    }


    public function edit($id)
    {
        $serviceEdit = Service::find($id);
        return view('backend.admin.layouts.service.edit', compact('serviceEdit'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric',
            'is_active' => 'required|boolean',
        ]);

        // Update the service
        $service->update($validated);

        return redirect()->route('admin.service.index')->with('success', 'Service updated successfully.');
    }


    public function destroy($id)
    {
        $serviceDelete = Service::find($id);

        if (!$serviceDelete) {
            return redirect()->route('admin.service.index')->with('error', 'Service not found!');
        }

        $serviceDelete->delete();

        return response()->json(['t-success' => true, 'message' => 'Data Deleted successfully.']);
    }

    public function view($id)
    {
        $serviceView = Service::find($id);
        return view('backend.admin.layouts.service.view', compact('serviceView'));
    }
}
