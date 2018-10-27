@extends('backLayout.app')
@section('title')
Material_measure
@stop

@section('content')

    <h1>Material_measure</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Material Id</th><th>Measure Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $material_measure->id }}</td> <td> {{ $material_measure->material_id }} </td><td> {{ $material_measure->measure_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection