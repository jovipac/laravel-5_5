@extends('backLayout.app')
@section('title')
Materialprovider
@stop

@section('content')

    <h1>Materialprovider</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Provider Id</th><th>Material Measure Id</th><th>Active</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $materialprovider->id }}</td> <td> {{ $materialprovider->provider_id }} </td><td> {{ $materialprovider->material_measure_id }} </td><td> {{ $materialprovider->active }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection