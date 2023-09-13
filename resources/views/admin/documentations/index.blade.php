@extends('layouts.admin')

@section ('content')

<style>
    /* Define the initial state of the button */
    .btn {
      padding: 5px 10px;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    /* Define the hover state */
    .btn:hover {
      transform: scale(1.10);
    }
</style>

    <div class="card rounded-3">

        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h5 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-images"></i> <b>Documentaries</b> </h5>
                </div>
                <div class="col-md-6 col-12 text-right">
                    <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal"  data-bs-target="#newDocumentation">
                        + Add New Documentations
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body row">
            <!-- This is if the docs is set -->
                @if(isset($docs) && $docs->count() > 0)
                        @foreach ($docs as $doc)
                <div class="col-md-3 col-sm-4 col-12 shadow-sm position-static mt-3">
                    <a href="{{ asset('storage/upload/images/'.$doc->image) }}" data-lightbox="lightbox-img" data-title="{{ $doc->caption }}" data-alt="{{ $doc->caption }}">
                        <img src="{{ asset('storage/upload/images/'.$doc->image) }}" alt="{{ $doc->caption }}" class="img-fluid">
                    </a>
                </div>
                @endforeach
                @else
                    <div class="alert alert-danger border border-danger">Sorry, there are no files or documentations at the moment</div>
                @endif
        </div>
    </div>
    @include('admin.documentations.partials._modal')
   @include('admin.documentations.partials._scripts')

   <br>
    <!-- Footer -->
    @include('layouts.partials._footer')
    <!-- End of Footer -->

     <!-- Scroll to Top Button-->

     @include('layouts.partials._scroll-up')

@endsection


