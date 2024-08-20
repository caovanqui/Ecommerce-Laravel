<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = Product::when(
            $keyword,
            fn ($query) => $query->search($keyword)
        );
        $productsAll = $products->paginate(12);

        return view('client.product', compact('productsAll'));
    }

    public function productdetail($id)
    {
        $product = Product::findOrFail($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->get();
        return view('client.productdetail', compact('product'));
    }

    // public function search(Request $request) {
    //     $keyword = $request->input('keyword');

    //     // Tìm kiếm sản phẩm theo từ khóa
    //     $products = Product::where('name', 'like', '%' . $keyword . '%')->orderBy('id','DESC')->paginate(8);

    //     return view('client.product', compact('products'));
    // }
}
