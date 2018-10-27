@extends('backLayout.app')
@section('title')
Business_partner_document
@stop

@section('content')

    <h1>Business_partner_document</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Business Partner Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $business_partner_document->id }}</td> <td> {{ $business_partner_document->name }} </td><td> {{ $business_partner_document->business_partner_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection