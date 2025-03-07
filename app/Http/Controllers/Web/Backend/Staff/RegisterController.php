<?php

namespace App\Http\Controllers\Web\Backend\Staff;

use Exception;
use App\Models\User;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StaffRegisterRequest;


class RegisterController extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = User::where('role', 'staff')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('address', function ($data) {
                        return $data->address ?? 'N/A';
                    })
                    ->addColumn('avatar', function ($data) {
                        $url = asset($data->avatar ?? 'backend/images/no-image.png');
                        return '<img src="' . $url . '" alt="image" class="img-fluid" height="40px" width="40px">';
                    })
                    ->editColumn('specialization', function ($data) {
                        return $data->specialization ?? 'N/A';
                    })
                    ->editColumn('salary', function ($data) {
                        return $data->salary ?? 'N/A';
                    })
                    ->editColumn('phone', function ($data) {
                        return $data->phone ?? 'N/A';
                    })
                    ->editColumn('role', function ($data) {
                        return $data->role ?? 'N/A';
                    })
                    ->editColumn('dob', function ($data) {
                        return $data->dob ?? 'N/A';
                    })
                    ->addColumn('action', function ($data) {
                        return '<a href="' . route('admin.staff.register.view', $data->id) . '" class="btn btn-primary btn-sm"><i class="ri-eye-line"></i> View</a>
                        <a href="' . route('admin.staff.register.edit', $data->id) . '" class="btn btn-warning btn-sm"><i class="ri-edit-2-line"></i> Edit</a>
                        <a href="#" onclick="deleteAlert(' . $data->id . ')" class="btn btn-danger btn-sm"><i class="ri-delete-bin-line" id="custom-sa-warning"></i> Delete</a>';
                    })
                    ->rawColumns(['avatar', 'action'])
                    ->make(true);
            }
            return view('backend.admin.layouts.staff_register.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    public function create()
    {
        return view('backend.admin.layouts.staff_register.create');
    }
    public function store(StaffRegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
            'salary' => $validated['salary'],
        ]);
        return redirect()->route('admin.staff.register.index')->with('success', 'Staff created successfully!');
    }



    public function edit($id)
    {
        $staffedit = User::find($id);
        return view('backend.admin.layouts.staff_register.edit', compact('staffedit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'nullable|string|in:admin,staff,customer',
            'salary' => 'nullable|numeric',
        ]);
        $staffedit = User::find($id);
        // Update Name
        $staffedit->name = $request->input('name', $staffedit->name);
        // Update Email if provided and it's unique
        if ($request->has('email') && $request->input('email') !== $staffedit->email) {
            $staffedit->email = $request->input('email');
        }
        // Update Password if provided
        if ($request->has('password') && $request->input('password') !== '') {
            $staffedit->password = Hash::make($request->input('password'));
        }
        // Update Role if provided
        $staffedit->role = $request->input('role', $staffedit->role);
        // Update Salary if provided
        $staffedit->salary = $request->input('salary', $staffedit->salary);
        // Save the changes
        $staffedit->save();

        return redirect()->route('admin.staff.register.index')->with('success', 'Staff updated successfully!');
    }


    public function destroy($id)
    {
        $staffdelete = User::find($id);

        if (!$staffdelete) {
            return redirect()->route('admin.staff.register.index')->with('error', 'Staff not found!');
        }
        if ($staffdelete->avatar) {
            Helper::fileDelete($staffdelete->avatar);
        }

        $staffdelete->delete();

        return response()->json(['t-success' => true, 'message' => 'Data Deleted successfully.']);
    }

    public function view($id)
    {
        $staffview = User::find($id);
        return view('backend.admin.layouts.staff_register.view', compact('staffview'));
    }
}
