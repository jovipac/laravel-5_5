@extends('backLayout.app')
@section('title')
Detail_delivery_order
@stop

@section('content')

    <h1>Detail_delivery_order</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Delivery Order Id</th><th>Material Id</th><th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $detail_delivery_order->id }}</td> <td> {{ $detail_delivery_order->delivery_order_id }} </td><td> {{ $detail_delivery_order->material_id }} </td><td> {{ $detail_delivery_order->quantity }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection