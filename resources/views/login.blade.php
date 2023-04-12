@extends('layout')
@section('title', 'login')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if ($errors->any()) <!-- this is for general laravel errors -->
            <div class="col-12">
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
            @endif
            @if (session()->has('error')) <!-- here error is the key that we specifies for our error messages -->
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if (session()->has('success')) <!-- here success is the key that we specifies for our error messages -->
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        <form action="{{route( 'login.post' )}}" method="POST" class="ms-auto me-auto mt-auto" style="width : 500px">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

@endsection
