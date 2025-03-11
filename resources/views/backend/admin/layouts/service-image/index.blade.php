@extends('backend.admin.app')
@section('title', 'Admin Dashboard | Service Image')
@push('style')
    @section('content')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Gallery</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Gallery</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <div class="card-body px-1">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row gallery-wrapper">
                                                <!-- end col -->
                                                @foreach ($services_images as $item)
                                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography"
                                                    data-category="photography">
                                                    <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                            <a class="image-popup"
                                                                href=""
                                                                title="">
                                                                <img class="gallery-img img-fluid mx-auto"
                                                                    src="{{ asset('backend/images/no-image.png') }}"
                                                                    alt="" />
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption">{{ $item->services->name ?? '' }}
                                                                    </h5>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                @endforeach
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- ene card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

        </div>
    @endsection
