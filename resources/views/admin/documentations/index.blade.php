@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-images"></i> Documentations</h6>
    </div>

    <div class="card">
        <form action="{{route('documentations.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
                <input type="file" name="doc_img" id="doc_img">
                <input type="text" name="caption" value="{{ old('caption') }}">
            </div>
            <div class="card-footer">
                <button class="btn btn-outline-success btn-sm" value="submit">Save</button>
            </div>
        </form>
        </div>


</div>
@endsection
