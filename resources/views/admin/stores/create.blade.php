@extends('layouts.app')

@section('content')
    <h1>Cadastrar Loja</h1>
    <form action="{{route('admin.stores.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="register">CNPJ/CPF</label>
                <input type="text" name="register" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="company_name">Nome Fantasia</label>
                <input type="text" name="company_name" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="description">Descrição</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="form-group col-md-1">
                <label for="prefix">Prefixo</label>
                <input type="text" name="prefix" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5">
                <label for="public_place">Logradouro</label>
                <input type="text" name="public_place" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="number">Número</label>
                <input type="text" name="number" class="form-control">
            </div>
            <div class="form-group col-md-5">
                <label for="complement">Complemento</label>
                <input type="text" name="complement" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="district">Bairro</label>
                <input type="text" name="district" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="city">Cidade</label>
                <input type="text" name="city" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="country">UF</label>
                <input type="text" name="country" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-2">
                <label for="phone">Telefone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="mobile_phone">Celular</label>
                <input type="text" name="mobile_phone" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="delivery_fee">Taxa de Entrega Padrão</label>
                <input type="text" name="delivery_fee" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="user">Usuário</label>
                <select name="user" class="form-control">
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <button type="submit" class="btn btn-md btn-success">Cadastrar</button>
            </div>

            <div class="col-md-2">
                <a href="{{route('admin.stores.index')}}" class="btn btn-md btn-info">Voltar</a>
            </div>
        </div>
    </form>
@endsection
