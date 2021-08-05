@extends('admin.index')
@section('content')
<div class="btn btn-outline-primary">
    <a href="{{ route('students.index') }}">
        All students
    </a>
</div>
@endsection