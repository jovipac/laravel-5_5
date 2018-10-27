@extends('backLayout.app')
@section('title')
Business_partner
@stop

@section('content')

    <h1>Business_partners <a href="{{ url('business_partners/create') }}" class="btn btn-primary pull-right btn-sm">Add New Business_partner</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblbusiness_partners">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Telephone</th><th>Email</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($business_partners as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('business_partners', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->telephone }}</td><td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ url('business_partners/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['business_partners', $item->id],
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
        $('#tblbusiness_partners').DataTable({
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