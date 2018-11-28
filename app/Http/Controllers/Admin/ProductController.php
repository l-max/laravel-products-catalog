<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'art' => 'required|max:255',
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        $image = '';
        if ($request->hasFile('image')) {
            $image = Storage::disk('local')->url(
                $request->image->store('public')
            );
        }
        Product::query()->create([
            'art' => $request->art,
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category,
            'image' => $image
        ]);
        return redirect('/admin/products');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::query()->find($product->id);
        if (!$product) {
            abort(404);
        }
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'art' => 'required|max:255',
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        $image = '';
        if ($request->hasFile('image')) {
            $image = Storage::disk('local')->url(
                $request->image->store('public')
            );
        }

        Product::query()->update([
            'art' => $request->art,
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category,
            'image' => ($request->image) ? $request->image : $image
        ]);
        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $product = Product::query()->find($product->id);
        if (!$product) {
            abort(404);
        }
        $product->delete();

        return redirect('/admin/products');
    }
}
