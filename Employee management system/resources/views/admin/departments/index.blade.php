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
                  <th>Department Name</th>
                  <th>Department id</th>
              
                  <th>Actions</th>
                   
                </tr>
              </thead>
              <tbody>
                @foreach ($dept_data as $dept)
                <tr>
                  <td>{{$dept->dep_name}}</td>
                  <td>{{$dept->dept_num}}</td>
               
                  <td>
                    <a href="{{route('admin.departments.show',$dept->dept_num)}}" class="btn btn-primary btn-sm">Show</a>

                      <form action="{{route('admin.departments.destroy', $dept->dept_num)}}" method="post" class="d-inline">
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
