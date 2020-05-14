@extends('layouts.app')

@section('content')
    <div class="col-sm-12 btn-group">
        <div class="col-sm-6">
            <a href="{{route('admin.products.create')}}" class="btn btn-md btn-success">Cadastrar Produto</a>
        </div>

        {{-- <div class="pagination justify-content-end col-sm-6">
            {{$products->links()}}
        </div> --}}
    </div>

    <div class="row">
        @foreach ($products as $product)
            <div class="card-group col-sm-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row col-sm-12">
                            <h5>{{$product->code}}</h5>
                        </div>
                        <div class="row col-sm-12">
                            <div class="col-sm-10">
                                <h6>{{$product->name}}</h6>
                            </div>
                            <div class="col-sm-2 justify-content-end">
                                <h4>
                                    <span class="badge badge-success">
                                        Estoque: <span class="badge badge-light">{{$product->quantity}}</span>
                                    </span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-text">
                            {{$product->description}}
                        </div>
                        <div class="row col-sm-12">
                            <div class="card-text">
                                <small class="text-muted">Referências: </small>
                                {{$product->size}}
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="card-text">
                                <small class="text-muted">Valor: </small>
                                R$ {{number_format($product->price, 2, ',', '.')}}
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="card-text">
                                <small class="text-muted">Desconto: </small>
                                R$ {{number_format($product->discount, 2, ',', '.')}}
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="card-text">
                                <small class="text-muted">Desconto: </small>
                                {{number_format($product->discount_percentage, 2, ',', '.')}}%
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="card-text">
                                <small class="text-muted">Taxa de Entrega: </small>
                                R$ {{number_format($product->delivery_fee, 2, ',', '.')}}
                            </div>
                        </div>

                        <div class="row col-sm-12">
                            <div class="card-text">
                                <small class="text-muted">Incluído em: </small>
                                {{date('d/m/Y H:i', strtotime($product->created_at))}}
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <div class="row" style="margin: 0.5em;">
                            <div class="w-50 p-1">
                                <a href="{{route('admin.products.edit', ['product' => $product->id])}}"
                                    class="btn btn-sm btn-primary">Editar Produto</a>
                            </div>

                            <div class="w-50 p-1">
                                <form action="{{route('admin.products.destroy', ['product' => $product->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Excluir Produto</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection

{{--
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
                    </td> --}}
