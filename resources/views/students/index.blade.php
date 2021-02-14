@extends('layouts.app')

@section('content')
      <div class="container m-5">
      <div class="container m-5">
    
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">name</th>
                  
                  <th scope="col">email</th>
                  <th scope="col">speciality</th>
                  <th scope="col">password</th>
                  
                  <th scope="col">Created At</th>

                  
               
                  <th scope="col">Actions</th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach($students as $student)
                <tr>
                <th scope="row">{{ $student->id }}</th>
                  <td>{{ $student->name }}</td>
                
                  <td>{{ $student->email }}</td>

                  <td>{{ $student->speciality }}</td>
                  <td>{{ $student->password }}</td>
                  <td>{{ $student->created_at }}</td>

                  <td><a href="{{route('students.show',['student' => $student->id])}}" class="btn btn-primary btn-sm">View Details</a></td>
         
              @endforeach
              </tbody>
            </table>
            
      </div>

{{ $students->links() }}

         

@endsection