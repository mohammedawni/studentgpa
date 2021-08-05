@extends('admin.index')
@section('title')
    Edit Student
@endsection
@section('content')
{!! Form::open(['route' => ['students.update', [$student]], 'method' => 'PUT']) !!}
    <div class="input-group mb-3">
      <input name='name' type="text" class="form-control" placeholder="Full name" value="{{$student->name}}">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-user"></span>
        </div>
      </div>
    </div>

    <div class="input-group mb-3">
    {!! Form::number('gpa', Request::old('gpa', '{{$student->gpa}}'), ['class'=>'form-control', 'placeholder'=>'GPA', 'step'=>'any']) !!}
    </div>
    <div class="row">
      <!-- /.col -->
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Edit Student</button>
      </div>
      <!-- /.col -->
    </div>
{!! Form::close() !!}

@endsection