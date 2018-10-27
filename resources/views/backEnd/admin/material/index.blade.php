@extends('backLayout.app')
@section('title')
Material
@stop

@section('content')

    <h1>Material <a href="{{ url('admin/material/create') }}" class="btn btn-primary pull-right btn-sm">Add New Material</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/material">
            <thead>
                <tr>
                    <th>ID</th><th>Code</th><th>Description</th><th>Material Category Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($material as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/material', $item->id) }}">{{ $item->code }}</a></td><td>{{ $item->description }}</td><td>{{ $item->material_category_id }}</td>
                    <td>
                        <a href="{{ url('admin/material/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/material', $item->id],
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
        $('#tbladmin/material').DataTable({
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