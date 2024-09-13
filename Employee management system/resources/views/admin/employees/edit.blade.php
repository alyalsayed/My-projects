@extends('admin.layouts.master')

@section('title','Edit Employee')

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <form class="form-horizontal" action="{{ route('admin.employees.update', $emp_data->ssn) }}" enctype="multipart/form-data" method="post">
          @csrf
          @method('PUT') 
          <div class="card-body">
                @if ($errors->any() )
                <div class="alert alert-danger">
                    <span> please enter the fields correctly </span>
                    <ul>  
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                </div>
                @elseif (Session::has('success'))
                <div class="alert alert-success">
                    <span> {{ Session::get('success') }} </span>
                </div>
                @endif
          <div class="form-group row">

              <label
                for="ssn"
                class="col-sm-3 text-end control-label col-form-label"
                >SSN</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control @error('ssn') is-invalid @enderror"
                  id="ssn"
                  placeholder="SSN Here"
                  name="ssn"
                  value="{{ $emp_data->ssn }}"
                  readonly
                />
                @error('ssn')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label
                for="fname"
                class="col-sm-3 text-end control-label col-form-label"
                >Fname</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control @error('fname') is-invalid @enderror"
                  id="fname"
                  placeholder="First Name Here"
                  name="fname"
                  value="{{ $emp_data->fname }}"
                />
                @error('fname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label
                for="lname"
                class="col-sm-3 text-end control-label col-form-label"
                >Lname</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control @error('lname') is-invalid @enderror"
                  id="lname"
                  placeholder="Last Name Here"
                  name="lname"
                  value=" {{ $emp_data->lname }}"
                />
                @error('lname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

              {{-- phone --}}

            <div class="form-group row">
              <label
                for="phone"
                class="col-sm-3 text-end control-label col-form-label"
                >Phone</label
                >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control @error('phone') is-invalid @enderror"
                  id="phone"
                  placeholder="Phone Here"
                  name="phone"
                  value="{{ $emp_data->phone }}"
                />
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            {{-- Salary --}}

            <div class="form-group row">
              <label
                for="salary"
                class="col-sm-3 text-end control-label col-form-label"
                >Salary</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control   @error('salary') is-invalid @enderror"
                  id="salary"
                  placeholder="Salary Here"
                  name="salary"
                  value="{{ $emp_data->salary }}"
                />


                @error('salary')  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label
                for="email"
                class="col-sm-3 text-end control-label col-form-label"
                >Email</label
              >
              <div class="col-sm-9">
                <input
                  type="email"
                  class="form-control @error('email') is-invalid @enderror"
                  id="email"
                  placeholder="Email Here"
                  name="email"
                  value="{{ $emp_data->email }}"
                />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
           
          
            <div class="form-group row">
              <label
                for="dno"
                class="col-sm-3 text-end control-label col-form-label"
                >Department</label
              >
              <div class="col-sm-9">
                <select class="form-control @error('dno') is-invalid @enderror" name="dno">
                    <option value="">Select Department</option>
                    @foreach ($dpt_data as $dpt)
                        <option value="{{ $dpt->dept_num }}" {{ $emp_data->dept_id == $dpt->dept_num ? 'selected' : '' }}>{{ $dpt->dep_name }}</option>
                    @endforeach
                </select>
                @error('dno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
          <div class="border-top">
            <div class="card-body">
              <button type="submit" class="btn btn-primary" name="action" value="edit">
                Edit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

