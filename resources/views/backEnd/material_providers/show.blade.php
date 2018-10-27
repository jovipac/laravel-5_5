@extends('backLayout.app')
@section('title')
Material_provider
@stop

@section('content')

    <h1>Material_provider</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Material Id</th><th>Provider Id</th><th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $material_provider->id }}</td> <td> {{ $material_provider->material_id }} </td><td> {{ $material_provider->provider_id }} </td><td> {{ $material_provider->stock }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection