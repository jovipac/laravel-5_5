@extends('backLayout.app')
@section('title')
Business_partner
@stop

@section('content')

    <h1>Business_partner</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Telephone</th><th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $business_partner->id }}</td> <td> {{ $business_partner->name }} </td><td> {{ $business_partner->telephone }} </td><td> {{ $business_partner->email }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection