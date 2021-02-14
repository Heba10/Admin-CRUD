  
@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('students.update', ['student' => $student->id])}}" style="width: 60%; margin: 3rem auto;">
    @csrf
    {{method_field('PUT')}}
    <div class="form-group">
      <label >name</label>
      <input name="name" value="{{$student->name}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
    <label >email</label>
      <!-- put name to can use it in controler function store -->
      <input name="email" value="{{$student->email}}"  type="text" class="form-control" aria-describedby="emailHelp">
    </div>


    <div class="form-group">
    <label >especiality</label>
      <!-- put name to can use it in controler function store -->
      <input name="speciality" value="{{$student->especiality}}"  type="text" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
    <label >password</label>
      <!-- put name to can use it in controler function store -->
      <input name="password" value="{{$student->password}}" type="password" class="form-control" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>

@endsection