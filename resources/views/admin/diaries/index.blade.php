@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-book-reader"></i> Diaries</h6>

                </div>
                {{-- <div class="col-md-6 col-12 text-right">
                    <a href="" class="btn btn-sm btn-primary">+ Add New</a>
                </div> --}}
             </div>
             </div>
              <div class="card-body">
             <table class="table table-sm table-hover">
                <form action="https://diaries.creativedevlabs.com/diaries" method="POST">
                    <input type="hidden" name="_token" value="PWhSq6StJnw2JlUwH3I6PNKdDEvIEUxDUznkHhAP"> <div class="card-body">
                    <div class="form-group">
                    <label for="todays-plan">Today's Plan</label>
                    <textarea class="form-control" id="todays-plan" name="plantoday" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="eod">End of Day Report</label>
                    <textarea class="form-control" id="eod" name="eod" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="roadblocks">Roadblocks</label>
                    <textarea class="form-control" id="roadblocks" name="roadblocks" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="summary">Summary of the Day</label>
                    <textarea class="form-control" id="summary" name="summary" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="tomorrows-plan">Tomorrow's Plan</label>
                    <textarea class="form-control" id="tomorrows-plan" name="plantomorrow" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="supervisor">Supervisor</label>
                    <select name="supervisor" id="supervisor" class="custom-select">
                    <option value selected disabled>Select Supervisor</option>
                    <option value="3">Test Supervisor</option>
                    </select>
                    </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-sm">Save</button>
                    <a href class="btn btn-secondary btn-sm">Cancel</a>
                    </div>
                    </form>



                {{-- <thead>
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

                </tbody> --}}
                </table>
        </div>
    </div>

    @include('admin.diaries.partials._datatables-scripts')
@endsection
