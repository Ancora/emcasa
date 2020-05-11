@extends('layouts.app')

@section('content')
    <h1>Atualizar Loja</h1>
    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{$store->name}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="register">CNPJ/CPF</label>
                <input type="text" name="register" class="form-control @error('register') is-invalid @enderror"
                    value="{{$store->register}}">
                @error('register')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="company_name">Nome Fantasia</label>
                <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror"
                    value="{{$store->company_name}}">
                @error('company_name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="description">Descrição</label>
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                    value="{{$store->description}}">
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-1">
                <label for="prefix">Prefixo</label>
                <input type="text" name="prefix" class="form-control @error('prefix') is-invalid @enderror"
                    value="{{$store->prefix}}">
                @error('prefix')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{$store->slug}}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5">
                <label for="public_place">Logradouro</label>
                <input type="text" name="public_place" class="form-control @error('public_place') is-invalid @enderror"
                    value="{{$store->public_place}}">
                @error('public_place')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="number">Número</label>
                <input type="text" name="number" class="form-control @error('number') is-invalid @enderror"
                    value="{{$store->number}}">
                @error('number')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-5">
                <label for="complement">Complemento</label>
                <input type="text" name="complement" class="form-control" value="{{$store->complement}}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="district">Bairro</label>
                <input type="text" name="district" class="form-control @error('district') is-invalid @enderror"
                    value="{{$store->district}}">
                @error('district')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="city">Cidade</label>
                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"
                    value="{{$store->city}}">
                @error('city')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-1">
                <label for="country">UF</label>
                <input type="text" name="country" class="form-control @error('country') is-invalid @enderror"
                    value="{{$store->country}}">
                @error('country')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="postal_code">CEP</label>
                <input type="text" name="postal_code" class="form-control @error('postal_code') is-invalid @enderror"
                    value="{{$store->postal_code}}">
                @error('postal_code')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-2">
                <label for="phone">Telefone</label>
                <input type="text" name="phone" class="form-control" value="{{$store->phone}}">
            </div>
            <div class="form-group col-md-2">
                <label for="mobile_phone">Celular</label>
                <input type="text" name="mobile_phone" class="form-control" value="{{$store->mobile_phone}}">
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{$store->email}}">
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="delivery_fee">Taxa de Entrega Padrão</label>
                <input type="text" name="delivery_fee" class="form-control" value="{{$store->delivery_fee}}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="user">Cadastrada por:</label>
                <input type="text" name="user" class="form-control bg-light" disabled value="{{$store->user->name}}">
            </div>

            <div class="col-md-4"></div>

            <div class="col-md-2 text-right">
                <button type="submit" class="btn btn-md btn-success">Atualizar</button>
            </div>

            <div class="col-md-2 text-right">
                <a href="{{route('admin.stores.index')}}" class="btn btn-md btn-info">Voltar</a>
            </div>
        </div>
    </form>
@endsection
