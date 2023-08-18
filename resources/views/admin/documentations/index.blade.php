@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 col-12">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-images"></i> Documentations</h6>

            </div>
            <div class="col-md-6 col-12 text-right">
                <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#newDocumentation">+ Add Your Documents</a>

            </div>
        </div>
    </div>

    <div class="card">
        {{-- <form action="{{route('documentations.store')}}" method="POST" enctype="multipart/form-data">
            @csrf --}}
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
        <div class="alert alert-danger border border-danger btn-block">Sorry, there are no files or documentations at the moment</div>
    @endif


                {{-- <input type="file" class="dropify" name="doc_img" id="doc_img">
                <input type="text" name="caption" value="{{ old('caption') }}"> --}}
        </div>
            <div class="card-footer">
                {{-- <button class="btn btn-outline-success btn-sm" value="submit">Save</button> --}}
            </div>
        </form>
    </div>


</div>

@include('admin.documentations.partials._modal')
@include('admin.documentations.partials._scripts')

@endsection
