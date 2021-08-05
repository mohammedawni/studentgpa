@extends('admin.index')
@section('title')
    Add Student
@endsection
@section('content')
<form action="{{ route('students.store') }}" method="post">
    @csrf
    <div class="input-group mb-3">
      <input name='name' type="text" class="form-control" placeholder="Full name">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-user"></span>
        </div>
      </div>
    </div>

    <div class="input-group mb-3">
    {!! Form::number('gpa', Request::old('gpa', 'GPA'), ['class'=>'form-control', 'placeholder'=>'GPA', 'step'=>'any']) !!}
    </div>
    <div class="row">
      <!-- /.col -->
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Add Student</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
@endsection