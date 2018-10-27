@extends('backLayout.app')
@section('title')
Edit Business_partner_document
@stop

@section('content')

    <h1>Edit Business_partner_document</h1>
    <hr/>

    {!! Form::model($business_partner_document, [
        'method' => 'PATCH',
        'url' => ['business_partner_documents', $business_partner_document->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('business_partner_id') ? 'has-error' : ''}}">
                {!! Form::label('business_partner_id', 'Business Partner Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('business_partner_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('business_partner_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection