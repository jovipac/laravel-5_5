@extends('backLayout.app')
@section('title')
Item
@stop

@section('content')

    <h1>Items <a href="{{ url('admin/items/create') }}" class="btn btn-primary pull-right btn-sm">Add New Item</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/items">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Price</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/items', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->price }}</td>
                    <td>
                        <a href="{{ url('admin/items/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/items', $item->id],
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
        $('#tbladmin/items').DataTable({
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