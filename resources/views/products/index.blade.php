@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD con laravel</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('products.create')}}" class="btn btn-success">Nuevo</a>
            </div>
        </div>
    </div>
    
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <br>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th with="300px">action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id}}</td>
                <td>{{ $product->name}}</td>
                <td>{{ $product->description}}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                        <a class="btn btn-info" href="{{ route('products.show',$product->id)}}">Ver</a>
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id)}}">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

