@extends('admin.layouts.master')

@section('title', 'Matrix Admin Lite Free Versions Template by WrapPixel')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Employee Details</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <!-- Employee Photo -->
                            <tr>
                                <th>Photo</th>
                                <td>
                                    @if($data->photo)
                                    <img src="{{ asset('storage/' . $data->photo) }}" alt="Employee Photo" style="width: 100px; height: auto;">
                                    @else
                                    No Photo Available
                                    @endif
                                    
                                    
                                </td>
                            </tr>
                            <!-- First Name -->
                            <tr>
                                <th>First Name</th>
                                <td>{{$data->fname}}</td>
                            </tr>
                            <!-- Last Name -->
                            <tr>
                                <th>Last Name</th>
                                <td>{{$data->lname}}</td>
                            </tr>
                            <!-- SSN -->
                            <tr>
                                <th>SSN</th>
                                <td>{{$data->ssn}}</td>
                            </tr>
                            <!-- Phone -->
                            <tr>
                                <th>Phone</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <!-- Email -->
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <!-- Salary -->
                            <tr>
                                <th>Salary</th>
                                <td>{{$data->salary}}</td>
                            </tr>
                            <!-- Car Model -->
                            <tr>
                                <th>Car Model</th>
                                <td>
                                    @if($data->car)
                                    {{$data->car->model}}
                                    @endif
                                </td>
                            </tr>
                            <!-- Car Color -->
                            <tr>
                                <th>Car Color</th>
                                <td>
                                    @if($data->car)
                                    {{$data->car->color}}
                                    @endif
                                </td>
                            </tr>
                            <!-- Department Name -->
                            <tr>
                                <th>Department Name</th>
                                <td>{{$data->department->dep_name}}</td>
                            </tr>
                            <!-- Number of Projects -->
                            <tr>
                                <th># Projects</th>
                                <td>{{$data->projects->count()}}</td>
                            </tr>
                            <!-- Projects Date -->
                            <tr>
                                <th>Projects Date</th>
                                <td>
                                    @foreach($data->projects as $project)
                                    <strong>{{ $project->project_name }}</strong> - Assigned: {{ $project->pivot->assigned_date }}<br>
                                    @endforeach
                                </td>
                            </tr>
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
 <script src="{{asset('admin/assets')}}/js/datatables.min.js"></script>
 <script>
   /****************************************
    *       Basic Table                   *
    ****************************************/
   $("#zero_config").DataTable();
 </script>
 @endsection
