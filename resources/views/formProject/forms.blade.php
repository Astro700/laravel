@extends('layout.layout')

@section('title', 'Form Handling')

@section('content')
 
 <div class="container-fluid header">
 	<strong><h2>Requests HandLing</h2></strong>
 </div>

 <div class="container-fuild shadow p-3 mb-5 bg-white rounded">
 	<h2>Student Record</h2>
 	<div class="one"> 
 	<form method="POST" action="/forms" >
 		{{ csrf_field() }}
 		<div class="form-group formGroupManu">
	      <label for="usr">Name:</label>
	      <input type="text" class="form-control formControlManu" id="usr" name="name">
        </div>
        <div class="form-group formGroupManu">
	      <label for="usr">Reg_No:</label>
	      <input type="text" class="form-control formControlManu" id="usr" name="reg_no">
        </div>
        <div class="form-group formGroupManu">
	      <label for="usr">Roll_No:</label>
	      <input type="text" class="form-control formControlManu" name="roll_no"  />
        </div>
 		<div class="form-group formGroupManu">
	      <label for="usr">Course:</label>
	      <input type="text" class="form-control formControlManu" id="usr" name="course">
        </div>
        <div class="form-group formGroupManu">
	      <label for="usr">Email:</label>
	      <input type="text" class="form-control formControlManu" id="usr" name="email">
        </div>
        <div class="form-group formGroupManu">
          <label for="usr">Phone:</label>
          <input type="text" class="form-control formControlManu" id="usr" name="phone">
        </div>

 		<input type="submit" class="btn btn-success buttonManu" value="Submit">
 		@if(isset($message))
 		<div class="alert alert-success" style="margin-top: 15px;">
            <strong>Success!</strong> {{ $message }}.
        </div>
        @endif
 	</form>
 </div>



  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>RegNo</th>
        <th>RollNo</th>
        <th>Course</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
        @foreach($getAll as $student)
          <tr>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['reg_no'] }}</td>
            <td>{{ $student['roll_no'] }}</td>
            <td>{{ $student['course'] }}</td>
            <td>{{ $student['email'] }}</td>
            <td>{{ $student['phone'] }}</td>
          </tr>
       @endforeach
    </tbody>
  </table>  

 </div>

@endsection