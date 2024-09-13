@extends('admin.layouts.master')

@section('title','Matrix Admin Lite Free Versions Template by WrapPixel')

@section('content')
<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
          @if (Session::has('success'))
          <div class="alert alert-success">
              <span> {{ Session::get('success') }} </span>
          </div>
          @endif
          <div class="table-responsive">
            <table
              class="table table-striped table-bordered"
            >
              <thead>
                <tr>
                  <th>Name</th>
                  <th>SSN</th>
                  <th>Department</th>
                  <th>Actions</th>
                   
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $emp)
                <tr>
                  <td>{{$emp->fname }} {{$emp->lname}}</td>
                  <td>{{$emp->ssn}}</td>
                  <td>{{$emp->department->dep_name}}</td>
                  <td>
                    <a href="{{route('admin.employees.show',$emp->ssn)}}" class="btn btn-primary btn-sm">Show</a>

                    <a href="{{route('admin.employees.edit',$emp->ssn)}}" class="btn btn-secondary btn-sm">Edit</a>
                      <form action="{{route('admin.employees.destroy', $emp->ssn)}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>

                  


                  </td>
                
                </tr>
                @endforeach
              </tbody>


            </table>
          </div>

        </div>
      </div>

    </div>
  </div>
@endsection

@section('table-script')
 <!-- this page js -->
 <script src="{{asset('dashboard/assets')}}/js/datatables.min.js"></script>
 <script>
   /****************************************
    *       Basic Table                   *
    ****************************************/
   $("#zero_config").DataTable();
 </script>
 @endsection
