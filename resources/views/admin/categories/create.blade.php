@extends('layouts.app')

@section('content')
    <h1>Cadastrar Categoria</h1>
    <form action="{{route('admin.categories.store')}}" method="POST">
        @csrf

        <div class="row">
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
                    class="form-control" value="{{old('description')}}""></textarea>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-8"></div>

            <div class="col-md-2 text-right">
                <button type="submit" class="btn btn-md btn-success">Cadastrar</button>
            </div>

            <div class="col-md-2 text-right">
                <a href="{{route('admin.products.index')}}" class="btn btn-md btn-info">Voltar</a>
            </div>
        </div>
    </form>
@endsection
