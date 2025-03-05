@extends('backend.admin.app')
@section('title', 'Admin Dashboard | Create Staff')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div
                            class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                            <h4 class="mb-sm-0">Form Layout</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Layout</li>
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
                                <h4 class="card-title mb-0 flex-grow-1">Register Staff</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <p class="text-muted"> Create an horizontal form with labels on top.Fill all information
                                    below</p>
                                <div class="live-preview">
                                    <form action="{{ route('admin.staff.register.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <!-- Name field is required -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="nameInput" class="form-label">Name</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="nameInput"
                                                    name="name" value="{{ old('name') }}" placeholder="Enter your name"
                                                    autofocus />
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
                                                    id="emailInput" name="email" value="{{ old('email') }}"
                                                    placeholder="Enter your email" />
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Password field is required -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="passwordInput" class="form-label">Password</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="passwordInput" name="password" placeholder="Enter your password" />
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Role field (optional) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="roleInput" class="form-label">Role <span
                                                        class="text-muted">(Optional)</span></label>
                                            </div>
                                            <div class="col-lg-9">
                                                <select class="form-select @error('role') is-invalid @enderror"
                                                    id="roleInput" name="role">
                                                    <option value="admin">Admin</option>
                                                    <option value="staff">Staff</option>
                                                    <option value="customer">Customer</option>
                                                </select>
                                                @error('role')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Address field (optional) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="addressInput" class="form-label">Address <span
                                                        class="text-muted">(Optional)</span></label>
                                            </div>
                                            <div class="col-lg-9">
                                                <textarea class="form-control @error('address') is-invalid @enderror" id="addressInput" name="address" rows="3"
                                                    placeholder="Enter your address"></textarea>
                                                @error('address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Avatar field (optional) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="avatarInput" class="form-label">Avatar <span
                                                        class="text-muted">(Optional)</span></label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="file"
                                                    class="form-control @error('avatar') is-invalid @enderror"
                                                    id="avatarInput" name="avatar" />
                                                @error('avatar')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Date of Birth field (optional) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="dobInput" class="form-label">Date of Birth <span
                                                        class="text-muted">(Optional)</span></label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="date"
                                                    class="form-control @error('dob') is-invalid @enderror" id="dobInput"
                                                    name="dob" />
                                                @error('dob')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Salary field (optional) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="salaryInput" class="form-label">Salary <span
                                                        class="text-muted">(Optional)</span></label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="number"
                                                    class="form-control @error('salary') is-invalid @enderror"
                                                    id="salaryInput" name="salary" placeholder="Enter your salary" />
                                                @error('salary')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Specialization field (optional) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="specializationInput" class="form-label">Specialization <span
                                                        class="text-muted">(Optional)</span></label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('specialization') is-invalid @enderror"
                                                    id="specializationInput" name="specialization"
                                                    placeholder="Enter your specialization" />
                                                @error('specialization')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Phone field (optional) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="phoneInput" class="form-label">Phone <span
                                                        class="text-muted">(Optional)</span></label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    id="phoneInput" name="phone" placeholder="Enter your phone" />
                                                @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Bio field (optional) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="bioInput" class="form-label">Bio <span
                                                        class="text-muted">(Optional)</span></label>
                                            </div>
                                            <div class="col-lg-9">
                                                <textarea class="form-control @error('bio') is-invalid @enderror" id="bioInput" name="bio" rows="3"
                                                    placeholder="Enter your bio"></textarea>
                                                @error('bio')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Status field (required) -->
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="statusInput" class="form-label">Status</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <select class="form-select @error('status') is-invalid @enderror"
                                                    id="statusInput" name="status">
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>2025 © Velzon.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design &amp; Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        @endsection
