{!! Form::open(['route'=>['students.destroy', $id], 'method'=>'DELETE']) !!}
{!! Form::submit('Delete student',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}