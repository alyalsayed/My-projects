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
                  <th>Actions</th>
                   
                </tr>
              </thead>
              <tbody>
                @forelse ($emp_data as $emp)
                <tr>
                    <td>{{$emp->fname }} {{$emp->lname}}</td>
                    <td>{{$emp->ssn}}</td>
                    <td>
                        {{-- Add restore button --}}
                        <form action="{{route('admin.employees.restore', $emp->ssn)}}" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Restore</button>
                        </form>
                        <form action="{{route('admin.employees.forceDelete', $emp->ssn)}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No employee data found.</td>
                </tr>
            @endforelse
            
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
