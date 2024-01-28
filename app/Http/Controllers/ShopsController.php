<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShopsRequest;
use App\Http\Requests\UpdateShopsRequest;
use App\Models\Shops;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShopsRequest $request)
    {
        Shops::create($request->only('name', 'address'));

        return redirect()->route('shops.create')->with('success', '店舗を登録しました。');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shops $shops)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shops $shops)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShopsRequest $request, Shops $shops)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shops $shops)
    {
        //
    }
}
