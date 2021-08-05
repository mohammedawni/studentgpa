@extends('admin.index')
@section('title')
    Students management
@endsection

@section('content')
    <ul>
        <li><strong>ID</strong> : {{$student->id}}</li>
        <li>Name : {{$student->name}}</li>
        <li>GPA : {{$student->gpa}}</li>
    </ul>
    <div>
        {!! Form::open(['route'=>['students.destroy', $student], 'method'=>'DELETE']) !!}
        {!! Form::submit('Delete student', ['class'=>'btn btn-danger mb-2']) !!}
        {!! Form::close() !!}
    </div>
    <div class="btn btn-outline-primary mx-2 text-dark">
        <a href="{{ route('students.edit', [$student]) }}">Edit student</a>
    </div>
@endsection