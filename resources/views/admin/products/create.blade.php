@extends('layouts.app')

@section('content')
    <h1>Cadastrar Produto</h1>
    <form action="{{route('admin.products.store')}}" method="POST">
        @csrf

        <div class="row">
            <div class="form-group col-md-2">
                <label for="code">Código</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">(prefixo)</span>
                    </div>
                    <input type="text" name="code" class="form-control @error('code') is-invalid @enderror"
                        value="{{old('code')}}">
                    @error('code')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{old('name')}}">
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
                    class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
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
                <input type="text" name="size" class="form-control" value="{{old('size')}}">
            </div>
            <div class="form-group col-md-3">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{old('slug')}}">
            </div>
            <div class="form-group col-md-2">
                <label for="quantity">Estoque Inicial</label>
                <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                    value="{{old('quantity')}}">
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
                        value="{{old('price')}}">
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
                    <input type="text" name="discount" class="form-control" value="{{old('discount')}}">
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="discount_percentage">Desconto</label>
                <div class="input-group">
                    <input type="text" name="discount_percentage" class="form-control" value="{{old('discount_percentage')}}">
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
                    <input type="text" name="delivery_fee" class="form-control" value="{{old('delivery_fee')}}">
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
                        value="{{old('sale')}}"">
                    @error('sale')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div> --}}

            {{-- <div class="form-group col-md-4">
                <label for="store">Loja</label>
                <select name="store" class="form-control">
                    @foreach ($stores as $store)
                    <option value="{{$store->id}}">{{$store->name}}</option>
                    @endforeach
                </select>
            </div> --}}

            <div class="col-md-8">
                <label>Categorias</label>
                <div class="col-md-6">
                    @foreach ($categories as $category)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="categories[]" type="checkbox" value="{{$category->id}}">
                            <label class="form-check-label">{{$category->name}}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-2 text-right">
                <button type="submit" class="btn btn-md btn-success">Cadastrar</button>
            </div>

            <div class="col-md-2 text-right">
                <a href="{{route('admin.products.index')}}" class="btn btn-md btn-info">Voltar</a>
            </div>
        </div>
    </form>
@endsection
