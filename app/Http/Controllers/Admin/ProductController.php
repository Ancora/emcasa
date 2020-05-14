<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Product;
use App\Store;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    private $product;
    private $store;

    public function __construct(Product $product, Store $store)
    {
        $this->product = $product;
        $this->store = $store;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $storesUser = auth()->user()->stores->where('id', '=', 'store'); */

        $products = $this->product->paginate(10);
        /* $products = auth()->user()->stores($store)->products()->paginate(6); */
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* $stores = \App\Store::find($store); */
        /* $stores = auth()->user()->stores;
        dd($stores); */
        $categories = \App\Category::all(['id', 'name']);
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        /* $store = \App\Store::find($data['store']); */
        /* $store->products()->create($data); */
        $store = auth()->user()->store;
        $product = $store->products()->create($data);

        $product->categories()->sync($data['categories']);

        flash('Produto ' . '<cite>' . $product->code . '-' . $product->name . '</cite>' . ' cadastrado com sucesso!')->success();
        return redirect()->route('admin.products.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($store)
    {
        $store = Store::with('products')->find($store);
        $products = DB::select('select * from products where store_id = ?', [$store->id]);
        return view('admin.products.show', compact('products', 'store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $product = $this->product->findOrFail($product);
        $stores = \App\Store::find($product->store->id);
        /* dd($stores->prefix); */
        $categories = \App\Category::all(['id', 'name']);
        return view('admin.products.edit', compact('product', 'stores', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $product)
    {
        $data = ($request->all());
        $product = \App\Product::find($product);
        $product->update($data);

        flash('Produto ' . '<cite>' . $product->code . '-' . $product->name . '</cite>' . ' atualizado com sucesso!')->success();
        return redirect()->route('admin.products.show', ['product' => $product->store_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product = \App\Product::find($product);
        $product->delete();

        flash('Produto ' . '<cite>' . $product->code . '-' . $product->name . '</cite>' . ' excluído com sucesso!')->success();
        return redirect()->route('admin.products.index');
    }
}
