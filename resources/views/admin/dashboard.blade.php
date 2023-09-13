@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" data-aos="flip-left" data-aos-delay="50" data-aos-duration="1500"><i class="fas fa-solid fa-tachometer-alt"></i> Duty Diary</h6>
    </div>

     <!-- Content Row -->
     <div class="row">


        <div class="col-6 col-md-6 mb-2" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1500">
            <div class="card border-left-primary shadow h-100 py-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Diaries</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $diaryCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6 col-md-6 mb-2" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1500">
            <div class="card border-left-success shadow h-100 py-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Documentations</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $documentationCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-images fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6 col-md-6 mb-2" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1500">
            <div class="card border-left-info shadow h-100 py-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Approval Requests
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $diaryCount }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6 col-md-6 mb-2" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500">
            <div class="card border-left-warning shadow h-100 py-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                               Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

 <!-- Footer -->
 @include('layouts.partials._footer')
 <!-- End of Footer -->

 <!-- Scroll to Top Button-->
@include('layouts.partials._scroll-up')

@endsection
