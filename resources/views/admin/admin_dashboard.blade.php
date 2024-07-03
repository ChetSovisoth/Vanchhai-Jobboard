@extends('layout.layout')

@section('content')
    <div class="d-flex flex-column mt-5">
        <div id="content">
            <div class="container-fluid" id="container-wrapper">
                <div class="mb-5 text-center">
                    <h1 class="h3 my-2 ms-5">Administrator Dashboard</h1>
                </div>

                <div class="row mb-3 d-flex justify-content-evenly align-items-center">
                    <!-- Total Employer -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('admin.employer') }}" type="button" class="w-100 text-decoration-none">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col me-2">
                                            <h4 class="text-xs font-weight-bold text-uppercase mb-1">Total Employer</h4>
                                            <div class="fs-4 font-weight-bold ">
                                                {{ $totalEmployers }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-briefcase fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Pending Job --}}
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('admin.pending') }}" type="button" class="w-100 text-decoration-none">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col me-2">
                                            <h4 class="text-xs font-weight-bold text-uppercase mb-1">Pending Job</h4>
                                            <div class="fs-4 font-weight-bold ">
                                                {{ $totalPendingJobs }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-eye fa-2x text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection