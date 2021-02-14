@extends('layouts.app')
@section('content')
<div class="card" style="width: 18rem;">
 
 <div class="card-body">
   <h5 class="card-title">{{ $student->name }}</h5>
   <p class="card-text">{{ $student->id }}</p>
   <p class="card-text">{{ $student->email }}</p>
   <p class="card-text">{{ $student->speciality }}</p>
   <p class="card-text">{{ $student->password }}</p>
   <p class="card-text">{{ $student->created_at }}</p>
   
 </div>
</div>
@endsection