@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-book-reader"></i> Diaries</h6>

                </div>
                <div class="col-md-6 col-12 text-right">
                    <a href="{{ route('diaries.create') }}" class="btn btn-sm btn-primary">+ Add New</a>
                </div>
             </div>
             </div>

                <div class="card-body">

                    @if (isset($success))
                        <div class="alert alert-success mx-2">
                            {{ $success }}
                        </div>
                    @endif
                    <table class="table table-sm table-hover" id="myDataTable">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Action</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($diaries as $diary)
                            <tr>
                                <th scope="row">{{ $diary->id }}</th>
                                {{-- <td>{{ $diary->id }}</td> --}}
                                <td>
                                    <!-- Add any action buttons or links here -->
                                    <a href="{{ route('diaries.show', $diary->id) }}" class="btn btn-sm btn-primary fas fa-eye"></a>
                                    <a href="{{ route('diaries.edit', $diary->id) }}" class="btn btn-sm btn-warning fas fa-edit"></a>
                                    <button onclick="confirmDelete({{ $diary->id }})" class="btn btn-sm btn-danger fas fa-trash"></button>
                                </td>
                                <td>
                                    @if ($diary->author)
                                    EOD REPORT for {{ $diary->created_at->format('F d, Y') }} by {{ $diary->author->name }}
                                    @else
                                    EOD REPORT for {{ $diary->created_at->format('F d, Y') }} by Unknown Author
                                    @endif
                                </td>
                                <td>
                                    @if ($diary->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                    @else
                                        <span class="badge badge-success">Approve</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                        </table>
                </div>
            </div>
    @include('admin.diaries.partials._diaries-script')
    @include('admin.diaries.partials._datatables-scripts')

     <!-- Footer -->
     @include('layouts.partials._footer')
     <!-- End of Footer -->
@endsection
