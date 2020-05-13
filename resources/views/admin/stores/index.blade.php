@extends('layouts.app')

@section('content')
    @if (count($stores) === 0)
        <div class="row justify-content-center">
            <div class="card text-center">
                <div class="card-header">
                    Nenhuma Loja ...
                </div>
                <div class="card-body">
                    <div class="item-group">
                        <p class="card-text">Deseja cadastrar sua loja agora?</p>
                        <a href="{{route('admin.stores.create')}}" class="btn btn-md btn-success">Cadastrar</a>
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
        <div class="col-sm-12 btn-group">
            <div class="col-sm-6">
                <a href="{{route('admin.stores.create')}}" class="btn btn-md btn-success">Cadastrar Loja</a>
            </div>

            <div class="pagination justify-content-end col-sm-6">
                {{$stores->links()}}
            </div>
        </div>

        <div class="row">
            @foreach ($stores as $store)
                <div class="card-group col-sm-4 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <div class="row col-sm-12">
                                <div class="col-sm-8">
                                    <h5>{{$store->company_name}}</h5>
                                </div>
                                <div class="col-sm-4 justify-content-end">
                                    <h4>
                                        <span class="badge badge-info">
                                            Itens disponíveis: <span class="badge badge-light">{{$store->products->count()}}</span>
                                        </span>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="card-text">
                                {{$store->description}}
                            </div>
                            <div class="row col-sm-12">
                                <div class="card-text">
                                <small class="text-muted">Identificador: </small>
                                {{$store->prefix}}
                                </div>

                            </div>

                            <div class="card-text">
                                <small class="text-muted">Endereço: </small>
                                {{$store->public_place}}, {{$store->number}}
                                {{$store->complement}}
                            </div>

                            <div class="card-text">
                                <small class="text-muted">Bairro: </small>
                                {{$store->district}}
                            </div>

                            <div class="card-text">
                                <small class="text-muted">CEP: </small>
                                {{$store->postal_code}}
                            </div>

                            <div class="card-text">
                                <small class="text-muted">Cidade/UF: </small>
                                {{$store->city}}/{{$store->country}}
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <div class="row" style="margin: 0.5em;">
                                <div class="w-50 p-1">
                                    <a href="{{route('admin.stores.edit', ['store' => $store->id])}}"
                                        class="w-100 btn btn-sm btn-primary">Editar Loja</a>
                                </div>
                                <div class="w-50 p-1">
                                    <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-100 btn btn-sm btn-danger">Excluir Loja</button>
                                    </form>
                                </div>
                            </div>

                            <div class="row" style="margin: 0.5em;">
                                <div class="w-50 p-1">
                                    <a href="{{route('admin.products.show', ['product' => $store->id])}}"
                                        class="w-100 btn btn-sm btn-outline-light">Editar Produtos</a>
                                </div>
                                <div class="w-50 p-1">
                                    <a href="{{route('admin.categories.index')}}"
                                        class="w-100 btn btn-sm btn-outline-info">Editar Categorias</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
