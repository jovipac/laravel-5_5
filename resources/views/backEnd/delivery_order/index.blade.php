@extends('backLayout.app')
@section('title')
Delivery_order
@stop

@section('content')

    <h1>Delivery_order <a href="{{ url('delivery_order/create') }}" class="btn btn-primary pull-right btn-sm">Add New Delivery_order</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbldelivery_order">
            <thead>
                <tr>
                    <th>ID</th><th>Customer Id</th><th>User Id</th><th>Doc Type</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($delivery_order as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('delivery_order', $item->id) }}">{{ $item->customer_id }}</a></td><td>{{ $item->user_id }}</td><td>{{ $item->doc_type }}</td>
                    <td>
                        <a href="{{ url('delivery_order/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['delivery_order', $item->id],
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
        $('#tbldelivery_order').DataTable({
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