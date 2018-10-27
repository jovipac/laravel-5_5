@extends('backLayout.app')
@section('title')
Measure
@stop

@section('content')

    <h1>Measures <a href="{{ url('admin/measures/create') }}" class="btn btn-primary pull-right btn-sm">Add New Measure</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/measures">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Unit</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($measures as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/measures', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->unit }}</td>
                    <td>
                        <a href="{{ url('admin/measures/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/measures', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tbladmin/measures').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection