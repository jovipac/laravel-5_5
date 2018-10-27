@extends('backLayout.app')
@section('title')
Create new Material_measure
@stop

@section('content')

    <h1>Create New Material_measure</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/material_measures', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('material_id') ? 'has-error' : ''}}">
                {!! Form::label('material_id', 'Material Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('material_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('material_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('measure_id') ? 'has-error' : ''}}">
                {!! Form::label('measure_id', 'Measure Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('measure_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('measure_id', '<p class="help-block">:message</p>') !!}
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