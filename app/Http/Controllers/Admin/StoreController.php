<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = auth()->user()->stores()->paginate(6);
        return view('admin.stores.index', compact('stores'));
    }

    public function create()
    {
        $users = \App\User::all(['id', 'name']);
        return view('admin.stores.create', compact('users'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->all();

        $user = auth()->user();
        $store = $user->stores()->create($data);

        flash('Loja ' . '<cite>' . $store->id . '-' . $store->name . '</cite>' . ' cadastrada com sucesso!')->success();
        return redirect()->route('admin.stores.create');
    }

    public function edit($store)
    {
        $store = \App\Store::find($store);
        return view('admin.stores.edit', compact('store'));
    }

    public function update(StoreRequest $request, $store)
    {
        $data = ($request->all());
        $store = \App\Store::find($store);
        $store->update($data);

        flash('Loja ' . '<cite>' . $store->id . '-' . $store->name . '</cite>' . ' atualizada com sucesso!')->success();
        return redirect()->route('admin.stores.index');
    }

    public function destroy($store)
    {
        $store = \App\Store::find($store);
        $store->delete();

        flash('Loja ' . '<cite>' . $store->id . '-' . $store->name . '</cite>' . ' excluída com sucesso!')->success();
        return redirect()->route('admin.stores.index');
    }
}
