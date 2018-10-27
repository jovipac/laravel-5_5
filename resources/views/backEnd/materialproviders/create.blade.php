@extends('backLayout.app')
@section('title')
Create new Materialprovider
@stop

@section('content')

    <h1>Create New Materialprovider</h1>
    <hr/>

    {!! Form::open(['url' => 'materialproviders', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('provider_id') ? 'has-error' : ''}}">
                {!! Form::label('provider_id', 'Provider Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('provider_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('provider_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('material_measure_id') ? 'has-error' : ''}}">
                {!! Form::label('material_measure_id', 'Material Measure Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('material_measure_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('material_measure_id', '<p class="help-block">:message</p>') !!}
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