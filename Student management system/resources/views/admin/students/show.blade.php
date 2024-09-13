@extends('admin.layouts.master')
@section('title', 'All students')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>{{ $student->name }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="{{ route('students.index') }}">All Students</a></li>
                                <li><a href="{{ route('students.create') }}">Add Student</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Students</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="col">Code</th>
                            <td>{{ $student->id }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Name</th>
                            <td>{{ $student->name }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Email</th>
                            <td>{{ $student->email }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Phone</th>
                            <td>{{ $student->phone }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Department</th>
                            <td>{{ $student->department->name }}</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
