@extends('backLayout.app')
@section('title')
Material_category
@stop

@section('content')

    <h1>Material_category</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $material_category->id }}</td> <td> {{ $material_category->name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection