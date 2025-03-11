@extends('backend.admin.app')
@section('title', 'Admin Dashboard | Staff Register')
@push('style')
@endpush
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div
                            class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                            <h4 class="mb-sm-0">Staff Register</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Staff Registers</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title mb-0 flex-grow-1">Staff Registers List</h5>
                                <div>
                                    <a href="{{ route('admin.staff.register.create') }}" class="btn btn-primary"><i
                                            class="ri-add-line align-middle me-1"></i> Add Staff</a>
                                </div>
                            </div>

                            <div class="card-body table-responsive">
                                <table id="data-table" class="table align-middle mb-0" style="width:100%">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Avatar</th>
                                            <th>Salary</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Date of Birth</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            var searchable = [];
            var selectable = [];

            // CSRF Token setup for ajax requests
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                }
            });

            // Initialize DataTable if it's not already initialized
            if (!$.fn.DataTable.isDataTable('#data-table')) {
                let dTable = $('#data-table').DataTable({
                    order: [],
                    lengthMenu: [
                        [10, 25, 50, 100, 200, 500, -1],
                        ["10", "25", "50", "100", "200", "500", "All"]
                    ],
                    pageLength: 10,
                    processing: true,
                    responsive: true,
                    serverSide: true,
                    language: {
                        lengthMenu: '_MENU_',
                        search: '',
                        searchPlaceholder: 'Search..',
                        zeroRecords: `<tr class="noresult" style ='display:flex; justify-content:center; width:100%;'>
                            <td colspan="11" class="text-center">
                                <div class="d-flex justify-content-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                </div>
                                <h5 class="mt-2 text-center">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0 text-center">We've searched more than 150+ Orders. We did not find any results for your search.</p>
                            </td>
                        </tr>`,
                        infoEmpty: "",
                        infoFiltered: ""
                    },
                    scroller: {
                        loadingIndicator: false
                    },
                    pagingType: "full_numbers",
                    dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    ajax: {
                        url: "{{ route('admin.staff.register.index') }}",
                        type: "get",
                        dataSrc: function(json) {
                            // Show "No Result Found" if there is no data
                            if (json.data.length === 0) {
                                $('.noresult').show();
                            } else {
                                $('.noresult').hide();
                            }
                            return json.data;
                        }
                    },

                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                            name: 'name',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'email',
                            name: 'email',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'address',
                            name: 'address',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'avatar',
                            name: 'avatar',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'salary',
                            name: 'salary',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'phone',
                            name: 'phone',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'role',
                            name: 'role',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'dob',
                            name: 'dob',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],
                });

                new DataTable('#example', {
                    responsive: true
                });
            }
        });


        function deleteAlert(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ route('admin.staff.register.destroy', ['id' => ':id']) }}`.replace(':id',
                            id),
                        method: 'delete',
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: id
                        },
                        success: function(response) {
                            if (response['t-success']) {
                                Swal.fire('Deleted!', response['message'], 'success').then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire('Error!', 'There was an issue deleting the record.', 'error');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log('Error deleting record ' + id + ': ' + xhr.responseText);
                            Swal.fire('Error!', xhr.responseText, 'error');
                        }
                    });
                }
            });
        }
    </script>
@endpush
