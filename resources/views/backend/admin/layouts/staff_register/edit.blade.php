@extends('backend.admin.app')
@section('title', 'Admin Dashboard | Edit Staff')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div
                            class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                            <h4 class="mb-sm-0">Edit Staff Information</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Staff</a></li>
                                    <li class="breadcrumb-item active">Edit Staff</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Edit Staff</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <p class="text-muted"> Update the form below with the correct information. Fields marked
                                    with * are required.</p>
                                <div class="live-preview">
                                    <form action="{{ route('admin.staff.register.update', $staffedit->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <!-- Name field is required -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="nameInput" class="form-label">Name</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="nameInput"
                                                    name="name" value="{{ old('name', $staffedit->name) }}"
                                                    placeholder="Enter your name" autofocus />
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Email field is required -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="emailInput" class="form-label">Email</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="emailInput" name="email"
                                                    value="{{ old('email', $staffedit->email) }}"
                                                    placeholder="Enter your email" />
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Password field (leave blank to keep current password) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="passwordInput" class="form-label">Password</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="passwordInput" value="{{ old('password') ?? $staffedit->password }}"
                                                    name="password" placeholder="Enter a new password" />
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Confirm Password field (leave blank to keep current password) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="password_confirmationInput" class="form-label">Confirm
                                                    Password</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    id="password_confirmationInput" name="password_confirmation"
                                                    value="{{ old('password_confirmation') ?? $staffedit->password }}"
                                                    placeholder="Confirm password" />
                                                @error('password_confirmation')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Role field -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="roleInput" class="form-label">Role <span
                                                        class="text-muted">(Optional)</span></label>
                                            </div>
                                            <div class="col-lg-9">
                                                <select class="form-select @error('role') is-invalid @enderror"
                                                    id="roleInput" name="role">
                                                    <option value="admin"
                                                        {{ old('role', $staffedit->role) == 'admin' ? 'selected' : '' }}>
                                                        Admin</option>
                                                    <option value="staff"
                                                        {{ old('role', $staffedit->role) == 'staff' ? 'selected' : '' }}>
                                                        Staff</option>
                                                    <option value="customer"
                                                        {{ old('role', $staffedit->role) == 'customer' ? 'selected' : '' }}>
                                                        Customer</option>

                                                </select>
                                                @error('role')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Salary field -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="salaryInput" class="form-label">Salary <span
                                                        class="text-muted">(Optional)</span></label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="number"
                                                    class="form-control @error('salary') is-invalid @enderror"
                                                    id="salaryInput" name="salary"
                                                    value="{{ old('salary', $staffedit->salary) }}"
                                                    placeholder="Enter your salary" />
                                                @error('salary')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Update Staff</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!-- End Page-content -->
            </div>
        </div>
    </div>

@endsection
