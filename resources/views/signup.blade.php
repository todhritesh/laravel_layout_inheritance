@extends('layout')

@section('title','Signup')

@section('sidebar')
@endsection

@section('content')
@endsection

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-lg">
                <h1 class="bg-danger text-light text-end p-3">Signup Form</h1>
                <div class="card-body">
                    <form action="/signup" method='post'>
                        @csrf
                        <div class="mb-2">
                            <div class="label form-label">Name</div>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                            <h6 class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </h6>
                        </div>
                        <div class="mb-2">
                            <div class="label form-label">Contact</div>
                            <input type="number" name="contact" class="form-control" value="{{old('contact')}}">
                            <h6 class="text-danger">
                                @error('contact')
                                    {{$message}}
                                @enderror
                            </h6>
                        </div>
                        <div class="mb-2">
                            <div class="label form-label">Email</div>
                            <input type="" name="email" class="form-control" value="{{old('email')}}">
                            <h6 class="text-danger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </h6>
                        </div>
                        <div class="mb-2">
                            <div class="label form-label">Password</div>
                            <input type="" name="password" class="form-control" value="{{old('password')}}">
                            <div class="small text-muted h6">*Password must be combination of digits , symbols and alphabets</div>
                            <h6 class="text-danger">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </h6>
                        </div>
                        <div class="mb-2 text-center">
                            <input type="submit" name="submit" class="w-50 btn btn-outline-primary border-3 fw-bold ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
