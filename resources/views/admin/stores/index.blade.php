@extends('layouts.app')

@section('content')
    <div class="col-sm-12 btn-group">
        <div class="col-sm-6">
            <a href="{{route('admin.stores.create')}}" class="btn btn-md btn-success">Cadastrar Loja</a>
        </div>

        <div class="pagination justify-content-end col-sm-6">
            {{$stores->links()}}
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th class="text-center">CPF/CNPJ</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td class="text-center">{{$store->register}}</td>
                    <td class="text-center">
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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
