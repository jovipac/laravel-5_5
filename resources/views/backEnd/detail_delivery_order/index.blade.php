@extends('backLayout.app')
@section('title')
Detail_delivery_order
@stop

@section('content')

    <h1>Detail_delivery_order <a href="{{ url('detail_delivery_order/create') }}" class="btn btn-primary pull-right btn-sm">Add New Detail_delivery_order</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbldetail_delivery_order">
            <thead>
                <tr>
                    <th>ID</th><th>Delivery Order Id</th><th>Material Id</th><th>Quantity</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($detail_delivery_order as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('detail_delivery_order', $item->id) }}">{{ $item->delivery_order_id }}</a></td><td>{{ $item->material_id }}</td><td>{{ $item->quantity }}</td>
                    <td>
                        <a href="{{ url('detail_delivery_order/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['detail_delivery_order', $item->id],
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
        $('#tbldetail_delivery_order').DataTable({
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