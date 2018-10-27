@extends('backLayout.app')
@section('title')
Measure
@stop

@section('content')

    <h1>Measure</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Unit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $measure->id }}</td> <td> {{ $measure->name }} </td><td> {{ $measure->unit }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection