<?php

namespace App\Http\Controllers\Web\Backend\Staff;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = User::where('role', 'staff')->get();
                return DataTables::of($data)
                    ->addIndexColumn()

                    ->addColumn('bio', function ($data) {
                        // Strip HTML tags and truncate the content
                        $bio = strip_tags($data->bio);
                        return Str::limit($bio, 100);
                    })
                    ->addColumn('action', function ($data) {
                        return '<a href="" class="btn btn-primary btn-sm"><i class="ri-eye-line"></i></a>
                        <a href="" class="btn btn-warning btn-sm"><i class="ri-edit-2-line"></i></a>
                        <a href="" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this staff?\')"><i class="ri-delete-bin-line"></i></a>';
                    })
                    ->rawColumns(['image', 'bio', 'action'])
                    ->make(true);
            }
            return view('backend.admin.layouts.staff_register.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('t-error', 'Something went wrong! Please try again.');
        }
    }

    

    public function create()
    {
        // Logic to show the staff registration form
    }

    public function store(Request $request)
    {
        // Logic to store the new staff data
    }

    public function edit($id)
    {
        // Logic to show the staff edit form
    }

    public function update(Request $request, $id)
    {
        // Logic to update the staff data
    }

    public function destroy($id)
    {
        // Logic to delete the staff
    }

    public function show($id)
    {
        // Logic to show a single staff's details
    }
}