@extends('backLayout.app')
@section('title')
Materialprovider
@stop

@section('content')

    <h1>Materialproviders <a href="{{ url('materialproviders/create') }}" class="btn btn-primary pull-right btn-sm">Add New Materialprovider</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblmaterialproviders">
            <thead>
                <tr>
                    <th>ID</th><th>Provider Id</th><th>Material Measure Id</th><th>Active</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($materialproviders as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('materialproviders', $item->id) }}">{{ $item->provider_id }}</a></td><td>{{ $item->material_measure_id }}</td><td>{{ $item->active }}</td>
                    <td>
                        <a href="{{ url('materialproviders/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['materialproviders', $item->id],
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
        $('#tblmaterialproviders').DataTable({
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