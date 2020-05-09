@extends('layouts.app')

@section('content')
    <h1>Atualizar Produto</h1>
    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="form-group col-md-2">
                <label for="code">Código</label>
                <input type="text" name="code" class="form-control" value="{{$product->code}}">
            </div>
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control" value="{{$product->name}}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{$product->description}}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="size">Características</label>
                <input type="text" name="size" class="form-control" value="{{$product->size}}">
            </div>
            <div class="form-group col-md-3">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{$product->slug}}">
            </div>
            <div class="form-group col-md-3">
                <label for="quantity">Estoque Inicial</label>
                <input type="text" name="quantity" class="form-control" value="{{$product->quantity}}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="price">Preço</label>
                <input type="text" name="price" class="form-control" value="{{$product->price}}">
            </div>
            <div class="form-group col-md-3">
                <label for="discount">Desconto (R$)</label>
                <input type="text" name="discount" class="form-control" value="{{$product->discount}}">
            </div>
            <div class="form-group col-md-3">
                <label for="discount_percentage">Desconto (%)</label>
                <input type="text" name="discount_percentage" class="form-control" value="{{$product->discount_percentage}}">
            </div>
            <div class="form-group col-md-3">
                <label for="delivery_fee">Taxa de Entrega</label>
                <input type="text" name="delivery_fee" class="form-control" value="{{$product->delivery_fee}}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <button type="submit" class="btn btn-md btn-success">Atualizar</button>
            </div>

            <div class="col-md-2">
                <a href="{{route('admin.products.index')}}" class="btn btn-md btn-info">Voltar</a>
            </div>
        </div>
    </form>
@endsection
