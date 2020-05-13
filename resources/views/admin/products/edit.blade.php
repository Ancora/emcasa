@extends('layouts.app')

@section('content')
    <h1>Atualizar Produto</h1>
    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="form-group col-md-2">
                <label for="code">Código</label>
                <input type="text" name="code" readonly class="form-control bg-light @error('code') is-invalid @enderror"
                    value="{{$product->code}}">
                @error('code')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{$product->name}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" cols="30" rows="3"
                    class="form-control @error('description') is-invalid @enderror">{{$product->description}}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
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
            <div class="form-group col-md-2">
                <label for="quantity">Estoque Inicial</label>
                <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                    value="{{$product->quantity}}">
                @error('quantity')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="price">Preço</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">R$</span>
                    </div>
                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                        value="{{$product->price}}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="discount">Desconto</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">R$</span>
                    </div>
                    <input type="text" name="discount" class="form-control" value="{{$product->discount}}">
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="discount_percentage">Desconto</label>
                <div class="input-group">
                    <input type="text" name="discount_percentage" class="form-control" value="{{$product->discount_percentage}}">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">%</span>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="delivery_fee">Taxa de Entrega</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">R$</span>
                    </div>
                    <input type="text" name="delivery_fee" class="form-control" value="{{$product->delivery_fee}}">
                </div>
            </div>
        </div>

        <div class="row">
            {{-- <div class="form-group col-md-3">
                <label for="sale">Preço Promocional</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">R$</span>
                    </div>
                    <input type="text" name="sale" class="form-control @error('sale') is-invalid @enderror"
                        value="{{$product->price}}"">
                    @error('sale')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div> --}}

            <div class="col-md-8"></div>

            <div class="col-md-2 text-right">
                <button type="submit" class="btn btn-md btn-success">Atualizar</button>
            </div>

            <div class="col-md-2 text-right">
                <a href="{{route('admin.products.index')}}" class="btn btn-md btn-info">Voltar</a>
            </div>
        </div>
    </form>
@endsection
