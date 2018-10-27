@extends('backLayout.app')
@section('title')
Material_provider
@stop

@section('content')

    <h1>Material_providers <a href="{{ url('material_providers/create') }}" class="btn btn-primary pull-right btn-sm">Add New Material_provider</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblmaterial_providers">
            <thead>
                <tr>
                    <th>ID</th><th>Material Id</th><th>Provider Id</th><th>Stock</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($material_providers as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('material_providers', $item->id) }}">{{ $item->material_id }}</a></td><td>{{ $item->provider_id }}</td><td>{{ $item->stock }}</td>
                    <td>
                        <a href="{{ url('material_providers/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['material_providers', $item->id],
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
        $('#tblmaterial_providers').DataTable({
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