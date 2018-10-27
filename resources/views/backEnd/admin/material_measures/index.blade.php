@extends('backLayout.app')
@section('title')
Material_measure
@stop

@section('content')

    <h1>Material_measures <a href="{{ url('admin/material_measures/create') }}" class="btn btn-primary pull-right btn-sm">Add New Material_measure</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/material_measures">
            <thead>
                <tr>
                    <th>ID</th><th>Material Id</th><th>Measure Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($material_measures as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/material_measures', $item->id) }}">{{ $item->material_id }}</a></td><td>{{ $item->measure_id }}</td>
                    <td>
                        <a href="{{ url('admin/material_measures/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/material_measures', $item->id],
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
        $('#tbladmin/material_measures').DataTable({
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