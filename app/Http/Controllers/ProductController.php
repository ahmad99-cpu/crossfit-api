<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{

    public function index()
    {
        return ProductResource::collection(product::all());
    }


    public function store(StoreproductRequest $request)
    {
        $product = product::create($request->validated());
        return ProductResource::make($product);
    }


    public function show(product $product)
    {
        return ProductResource::make($product);
    }


    public function update(UpdateproductRequest $request, product $product)
    {
        $product->update($request->validated());
        return ProductResource::make($product);
    }


    public function destroy(product $product)
    {
        $product->delete();
        return response()->noContent();
    }
}
