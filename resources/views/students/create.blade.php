@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('students.store')}}">
    @csrf
    <div class="form-group">
      <label >name</label>
      <!-- put name to can use it in controler function store -->
      <input name="name" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
    <label >email</label>
      <!-- put name to can use it in controler function store -->
      <input name="email" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
    <label >speciality</label>
      <!-- put name to can use it in controler function store -->
      <input name="speciality" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <label >password</label>
      <!-- put name to can use it in controler function store -->
      <input name="password" type="password" class="form-control" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection