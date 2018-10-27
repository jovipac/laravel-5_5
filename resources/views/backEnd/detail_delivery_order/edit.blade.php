@extends('backLayout.app')
@section('title')
Edit Detail_delivery_order
@stop

@section('content')

    <h1>Edit Detail_delivery_order</h1>
    <hr/>

    {!! Form::model($detail_delivery_order, [
        'method' => 'PATCH',
        'url' => ['detail_delivery_order', $detail_delivery_order->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('delivery_order_id') ? 'has-error' : ''}}">
                {!! Form::label('delivery_order_id', 'Delivery Order Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('delivery_order_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('delivery_order_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('material_id') ? 'has-error' : ''}}">
                {!! Form::label('material_id', 'Material Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('material_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('material_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
                {!! Form::label('quantity', 'Quantity: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
                {!! Form::label('price', 'Price: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('price', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('subtotal') ? 'has-error' : ''}}">
                {!! Form::label('subtotal', 'Subtotal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('subtotal', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('subtotal', '<p class="help-block">:message</p>') !!}
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