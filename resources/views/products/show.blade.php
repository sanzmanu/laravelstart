@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Detalle del producto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index')}}">Atras</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre: </strong>
            {{ $product->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripción: </strong>
            {{ $product->description}}
        </div>
    </div>
</div>
@endsection