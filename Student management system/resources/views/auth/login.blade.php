@extends('user.master')
@section('content')
    <form class="py-5" action="{{ route('auth.handleLogin') }}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3"name="password">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
