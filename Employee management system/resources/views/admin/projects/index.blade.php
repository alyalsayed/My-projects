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
                  <th>Project Name</th>
                  <th>Project id</th>
              
                  <th>Actions</th>
                   
                </tr>
              </thead>
              <tbody>
                @foreach ($proj_data as $proj)
                <tr>
                  <td>{{$proj->project_name}}</td>
                  <td>{{$proj->id}}</td>
               
                  <td>
                    <a href="{{route('admin.projects.show',$proj->id)}}" class="btn btn-primary btn-sm">Show</a>

                     

                  


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
