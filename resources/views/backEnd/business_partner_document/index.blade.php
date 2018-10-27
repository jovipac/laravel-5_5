@extends('backLayout.app')
@section('title')
Business_partner_document
@stop

@section('content')

    <h1>Business_partner_document <a href="{{ url('business_partner_document/create') }}" class="btn btn-primary pull-right btn-sm">Add New Business_partner_document</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblbusiness_partner_document">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Business Partner Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($business_partner_document as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('business_partner_document', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->business_partner_id }}</td>
                    <td>
                        <a href="{{ url('business_partner_document/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['business_partner_document', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblbusiness_partner_document').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection