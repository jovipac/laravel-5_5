@extends('backLayout.app')
@section('title')
Create new Delivery_order
@stop

@section('content')

    <h1>Create New Delivery_order</h1>
    <hr/>

    {!! Form::open(['url' => 'delivery_order', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('customer_id') ? 'has-error' : ''}}">
                {!! Form::label('customer_id', 'Customer Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('customer_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('customer_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
                {!! Form::label('user_id', 'User Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('user_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_type') ? 'has-error' : ''}}">
                {!! Form::label('doc_type', 'Doc Type: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('doc_type', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_type', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_serie') ? 'has-error' : ''}}">
                {!! Form::label('doc_serie', 'Doc Serie: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_serie', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_serie', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_num') ? 'has-error' : ''}}">
                {!! Form::label('doc_num', 'Doc Num: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_num', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_num', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_date') ? 'has-error' : ''}}">
                {!! Form::label('doc_date', 'Doc Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('doc_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
                {!! Form::label('total', 'Total: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('total', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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