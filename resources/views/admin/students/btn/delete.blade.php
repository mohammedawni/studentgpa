{!! Form::open(['route'=>['students.destroy', $id], 'method'=>'DELETE', 'id'=>'student_delete']) !!}
{!! Form::submit('Delete student',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}