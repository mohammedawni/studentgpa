@extends('admin.index')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">

@section('content')
{{$dataTable->table([], true)}}
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
    {{$dataTable->scripts()}}
@endpush