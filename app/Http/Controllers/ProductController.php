<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    /**
     * @param Category $category
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Category $category, Request $request)
    {
        // todo: need create elements per page
        //$elementsPerPage = $request->get('limit', 3);

        return view('products.index', [
            'products' => Product::query()
                ->where('category_id', $category->id)
                ->paginate(3),
            'category' => $category,
            'categories' => Category::query()->get(),
//            'limit' => $elementsPerPage,
        ]);
    }
}
