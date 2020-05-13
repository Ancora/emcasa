@extends('layouts.app')

@section('content')
    @if (count($categories) === 0)
        <div class="row justify-content-center">
            <div class="card text-center">
                <div class="card-header">
                    Nenhuma Categoria ...
                </div>
                <div class="card-body">
                    <div class="item-group">
                        <p class="card-text">Deseja cadastrar categorias agora?</p>
                        <a href="{{route('admin.categories.create')}}" class="btn btn-md btn-success">Cadastrar</a>
                        <a class="btn btn-md btn-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Não, farei isto depois') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-sm-12 btn-group" style="margin-bottom: 1em;">
            <div class="col-sm-6">
                <a href="{{route('admin.categories.create')}}" class="btn btn-md btn-success">Cadastrar Categoria</a>
            </div>

            <div class="pagination justify-content-end col-sm-6">
                {{$categories->links()}}
            </div>
        </div>

        <div class="row">
            @foreach ($categories as $category)
                <div class="card-group col-sm-4 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <div class="row col-sm-12">
                                <div class="col-sm-8">
                                    <h5>{{$category->name}}</h5>
                                </div>
                                <div class="col-sm-4 justify-content-end">
                                    <h4>
                                        <span class="badge badge-info">
                                            Itens disponíveis: <span class="badge badge-light">{{$category->products->count()}}</span>
                                        </span>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="card-text">
                                {{$category->description}}
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="btn-group">
                                <a href="{{route('admin.categories.edit', ['category' => $category->id])}}"
                                    class="btn btn-sm btn-primary">Editar</a>
                            </div>
                            <div class="btn-group">
                                <form action="{{route('admin.categories.destroy', ['category' => $category->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
