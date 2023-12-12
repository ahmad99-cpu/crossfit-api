<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{

	public function index()
	{
		return ProductResource::collection(Product::all());
	}

	public function store(StoreProductRequest $request)
	{
		$Product = Product::create($request->validated());
		return ProductResource::make($Product);
	}


	public function show(Product $Product)
	{
		return ProductResource::make($Product);
	}


	public function update(UpdateProductRequest $request, Product $Product)
	{
		$Product->update($request->validated());
		return ProductResource::make($Product);
	}


	public function destroy(Product $Product)
	{
		$Product->delete();
		return response()->noContent();
	}
}
