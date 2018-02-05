@extends('master')

@section('title')
  Create Student | Student Management
@endsection

@section('content')
  <h2>Create New Student</h2>


  <form class="form-horizontal" action="{{ route('store') }}" method="post" data-parsley-validate>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
          @endforeach
        </ul>
      </div>
    @endif

    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name" maxlength="10" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">UserName:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email" id="email" data-parsley-type="alphanum" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="registration_id">Registration No:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="registration_id" id="registration_id"  required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="department_name">Department:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="department_name" id="department_name" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="info">Info:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="info" id="info" rows="10"></textarea>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Register Student</button>
      </div>
    </div>
  </form>
@endsection
