@extends('backend.admin.app')

@section('title', 'Admin Dashboard | Create Service')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- Start Page Title -->
                <div class="row">
                    <div class="col-12">
                        <div
                            class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                            <h4 class="mb-sm-0">Create Service</h4>

                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Create Service</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="mb-0 card-title flex-grow-1">Create Service</h4>
                            </div><!-- End Card Header -->
                            <div class="card-body">
                                <p class="text-muted">Fill in the details below to create a new service.</p>

                                <form action="{{ route('admin.service.store') }}" method="POST">
                                    @csrf
                                    <!-- Name Field -->
                                    <div class="mb-3 row">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">Name</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="nameInput" name="name" value="{{ old('name') }}"
                                                placeholder="Enter service name" autofocus />
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Description Field -->
                                    <div class="mb-3 row">
                                        <div class="col-lg-3">
                                            <label for="descriptionInput" class="form-label">Description</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <textarea class="form-control @error('description') is-invalid @enderror" id="descriptionInput" name="description"
                                                rows="3" placeholder="Enter service description">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Price Field -->
                                    <div class="mb-3 row">
                                        <div class="col-lg-3">
                                            <label for="priceInput" class="form-label">Price</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control @error('price') is-invalid @enderror"
                                                id="priceInput" name="price" value="{{ old('price') }}"
                                                placeholder="Enter service price" />
                                            @error('price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Is Active Field -->
                                    <div class="mb-3 row">
                                        <div class="col-lg-3">
                                            <label for="isActiveInput" class="form-label">Is Active</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <select class="form-select @error('is_active') is-invalid @enderror"
                                                id="isActiveInput" name="is_active">
                                                <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>
                                                    Active</option>
                                                <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>
                                                    Inactive</option>
                                            </select>
                                            @error('is_active')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Create Service</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Content -->
        </div>
    </div>
@endsection
