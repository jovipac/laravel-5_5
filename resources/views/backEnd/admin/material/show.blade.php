@extends('backLayout.app')
@section('title')
Material
@stop

@section('content')

    <h1>Material</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Code</th><th>Description</th><th>Material Category Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $material->id }}</td> <td> {{ $material->code }} </td><td> {{ $material->description }} </td><td> {{ $material->material_category_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection