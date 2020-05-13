@extends('layouts.app')

@section('content')
    <h1>Atualizar Categoria</h1>
    <form action="{{route('admin.categories.update', ['category' => $category->id])}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{$category->name}}">
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
                    class="form-control">{{$category->description}}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{$category->slug}}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-8"></div>

            <div class="col-md-2 text-right">
                <button type="submit" class="btn btn-md btn-success">Atualizar</button>
            </div>

            <div class="col-md-2 text-right">
                <a href="{{route('admin.categories.index')}}" class="btn btn-md btn-info">Voltar</a>
            </div>
        </div>
    </form>
@endsection
