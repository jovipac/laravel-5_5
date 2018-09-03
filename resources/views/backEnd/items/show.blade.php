@extends('backLayout.app')
@section('title')
Item
@stop

@section('content')

    <h1>Item</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $item->id }}</td> <td> {{ $item->name }} </td><td> {{ $item->price }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection