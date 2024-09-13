@extends('admin.layouts.master')

@section('title','Add Employee')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <form class="form-horizontal" action="{{ route('admin.employees.store') }}" enctype="multipart/form-data" method="post">
          @csrf
          <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <span>Please enter the fields correctly</span>
            </div>
        @elseif (Session::has('success'))
            <div class="alert alert-success">
                <span> {{ Session::get('success') }}</span>
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
                  value="{{ old('ssn') }}"
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
                  value="{{ old('fname') }}"
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
                    value="{{ old('lname') }}"
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
                  value="{{ old('phone') }}"
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
                  value="{{ old('salary') }}"
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
                  value="{{ old('email') }}"
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
                    <option value="1" @if( old('dno') == 1 ) selected @endif>cs</option>
                    <option value="2" @if( old('dno') == 2 ) selected @endif>is</option>  
                    <option value="3" @if( old('dno') == 3 ) selected @endif>os</option>
                </select>
                @error('dno')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
          </div>
          <!-- New Photo Input -->
          <div class="form-group row">
            <label for="photo" class="col-sm-3 text-end control-label col-form-label">Photo</label>
            <div class="col-sm-9">
                <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" />
                @error('photo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
          <div class="border-top">
            <div class="card-body">
              <button type="submit" class="btn btn-primary" name="action" value="add">
                Add
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

