@extends('backLayout.app')
@section('title')
Partner_category
@stop

@section('content')

    <h1>Partner_categories <a href="{{ url('admin/partner_categories/create') }}" class="btn btn-primary pull-right btn-sm">Add New Partner_category</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/partner_categories">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($partner_categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/partner_categories', $item->id) }}">{{ $item->name }}</a></td>
                    <td>
                        <a href="{{ url('admin/partner_categories/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/partner_categories', $item->id],
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
        $('#tbladmin/partner_categories').DataTable({
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