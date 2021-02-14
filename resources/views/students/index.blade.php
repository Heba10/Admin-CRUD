@extends('layouts.app')

@section('content')
      <div class="container m-5">
      <div class="container m-5">
      <a href="{{route('students.create')}}" class="btn btn-success mb-5">Create student</a>
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

         
                  <td><a href="{{route('students.edit',['student' => $student->id])}}" class="btn btn-primary btn-sm">Edit</a></td>
                <td><form id="Form" method="POST" action="{{route('students.destroy', ['student' => $student->id])}}" >
            @csrf
            {{method_field('DELETE')}}
            <button type="button" onclick="deletestudent({{$student->id}})" class="btn btn-danger btn-sm">Delete</button>
         
         
          </form>
          
          <script>
  function deletestudent(id) {
    var Form = document.querySelector(`#Form`);
    var answer = confirm('are you want to delete this student.... ?');
    if(answer) {
      Form.submit();
    }
  }
</script> </td>
              @endforeach
              </tbody>
            </table>
            
      </div>

{{ $students->links() }}

         

@endsection