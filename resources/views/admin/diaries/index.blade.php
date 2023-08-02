@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-book-reader"></i> Diaries</h6>

                </div>
                <div class="col-md-6 col-12 text-right">
                    <a href="" class="btn btn-sm btn-primary">+ Add New</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Action</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Supervisor</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                    <td>EOD Report for August 01, 2023</td>
                    <td>Admin 1</td>
                    <td>Supervisor 5</td>
                    <td><span class="badge badge-pill badge-success">Approved</span></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                    <td>EOD Report for August 02, 2023</td>
                    <td>Admin 2</td>
                    <td>Supervisor 6</td>
                    <td><span class="badge badge-pill badge-danger">Pending</span></td>
                    </tr>

                </tbody>
                </table>
        </div>
    </div>
@endsection