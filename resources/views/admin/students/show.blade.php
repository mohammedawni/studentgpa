@extends('admin.index')
@section('title')
    User management
@endsection

@section('content')
    <ul>
        <li>Name : {{$student->name}}</li>
        <li>Name : {{$student->gpa}}</li>
    </ul>
    <div>
        {!! Form::open(['route'=>['students.destroy', $student], 'method'=>'DELETE']) !!}
        {!! Form::submit('Delete student', ['class'=>'btn btn-danger mb-2']) !!}
        {!! Form::close() !!}
    </div>
    <div class="btn btn-success mx-2">
        <a href="{{ route('students.edit', [$student]) }}">Edit student</a>
    </div>
@endsection