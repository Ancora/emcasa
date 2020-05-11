@extends('layouts.app')

{{--
    <div class="container">
    <div class="row justify-content-center">
    --}}

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
                            {{$store->company_name}}
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                {{$store->description}}
                            </div>
                            <div class="card-text">
                                <p class="card-text"><small class="text-muted">Endereço</small></p>
                                {{$store->public_place}}, {{$store->number}}
                                <p class="card-text">{{$store->complement}}</p>
                            </div>
                            <div class="card-text">
                                {{$store->district}}, CEP: {{$store->postal_code}}
                            </div>
                            <div class="card-text">
                                {{$store->city}}/{{$store->country}}
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group">
                                <a href="{{route('admin.stores.edit', ['store' => $store->id])}}"
                                    class="btn btn-sm btn-primary">Editar</a>
                            </div>
                            <div class="btn-group">
                                <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="POST">
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
