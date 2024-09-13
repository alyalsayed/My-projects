@extends('admin.layouts.master')

@section('title', 'Department Details')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    <span>{{ Session::get('success') }}</span>
                </div>
                @endif
                <h4 class="card-title">Department Details</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Department Name</th>
                                <th>Department ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $dept_data->dep_name }}</td>
                                <td>{{ $dept_data->dept_num }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h4 class="mt-4">Employees in this Department</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Employee Name</th>
                                <th>Employee ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dept_data->employees as $employee)
                            <tr>
                                <td>{{ $employee->fname }} {{ $employee->lname }}</td>
                                <td>{{ $employee->ssn }}</td>
                               
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
<script src="{{ asset('dashboard/assets/js/datatables.min.js') }}"></script>
<script>
    /****************************************
    *       Basic Table                   *
    ****************************************/
    $("#zero_config").DataTable();
</script>
@endsection
