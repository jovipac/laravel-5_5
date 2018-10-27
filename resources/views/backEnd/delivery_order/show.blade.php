@extends('backLayout.app')
@section('title')
Delivery_order
@stop

@section('content')

    <h1>Delivery_order</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Customer Id</th><th>User Id</th><th>Doc Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $delivery_order->id }}</td> <td> {{ $delivery_order->customer_id }} </td><td> {{ $delivery_order->user_id }} </td><td> {{ $delivery_order->doc_type }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection