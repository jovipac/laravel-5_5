@extends('backLayout.app')
@section('title')
Create new Material_provider
@stop

@section('content')

    <h1>Create New Material_provider</h1>
    <hr/>

    {!! Form::open(['url' => 'material_providers', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('material_id') ? 'has-error' : ''}}">
                {!! Form::label('material_id', 'Material Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('material_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('material_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('provider_id') ? 'has-error' : ''}}">
                {!! Form::label('provider_id', 'Provider Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('provider_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('provider_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('stock') ? 'has-error' : ''}}">
                {!! Form::label('stock', 'Stock: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('stock', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('stock', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('last_purchase') ? 'has-error' : ''}}">
                {!! Form::label('last_purchase', 'Last Purchase: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('last_purchase', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('last_purchase', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
                {!! Form::label('active', 'Active: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('active', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('active', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
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