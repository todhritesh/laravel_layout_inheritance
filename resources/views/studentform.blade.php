@extends('layout')

@section('title',"Form")

@section('sidebar')
@endsection

@section('content')
@endsection

<div class="container mt-3 pt-5">
    <div class="row justify-content-between">
        <div class="col-7">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Gender</th>
                </tr>

                @foreach ($details as $d )
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->course}}</td>
                        <td>{{$d->gender}}</td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="col-4">
            <form action="{{route('submitform')}}" method="post">
            @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" value="{{old('name')}}" name="name" class="form-control">
                    @error('name')
                        <div class="text-danger small">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-label">Gender</div>
                    <input type="radio" value="Male" name="gender" class="form-check-input">
                    <label class="form-check-label">Male</label>
                    <input type="radio" value="female" name="gender" class="form-check-input">
                    <label class="form-check-label">Female</label>
                    <input type="radio" value="Others" name="gender" class="form-check-input">
                    <label class="form-check-label">Others</label>
                    @error('gender')
                        <div class="text-danger small">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Course</label>
                    <input type="text" value="{{old('course')}}" name="course" class="form-control">
                    @error('course')
                        <div class="text-danger small">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="submit" class="w-100 btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
