@extends('backLayout.app')
@section('title')
Partner_category
@stop

@section('content')

    <h1>Partner_category</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $partner_category->id }}</td> <td> {{ $partner_category->name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection