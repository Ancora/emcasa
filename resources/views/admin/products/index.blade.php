@extends('layouts.app')

@section('content')
    <a href="{{route('admin.products.create')}}" class="btn btn-md btn-success">Cadastrar Produto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Código</th>
                <th>Nome</th>
                <th class="text-center">Preço</th>
                <th>Loja</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->name}}</td>
                    <td class="text-center">R$ {{number_format($product->price, 2, ',', '.')}}</td>
                    <td>{{$product->store->name}}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{route('admin.products.edit', ['product' => $product->id])}}"
                                class="btn btn-sm btn-primary">Editar</a>
                        </div>
                        <div class="btn-group">
                            <form action="{{route('admin.products.destroy', ['product' => $product->id])}}" method="POST">
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
    <div class="pagination justify-content-end">
        {{$products->links()}}
    </div>
@endsection
