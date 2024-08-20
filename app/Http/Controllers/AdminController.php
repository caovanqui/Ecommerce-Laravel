<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    // Product
    public function productlist()
    {
        $categories = Category::categoryOrderByName()->get();
        $product = Product::orderBy('id', 'ASC')->paginate(8);
        return view('admin.productlist', compact('categories', 'product'));
    }
    public function addproduct(Request $request)
    {
        $product = Product::createProduct($request);
        return redirect()->route('admin.productlist');
    }
    public function showAddProductForm()
    {
        return view('admin.addproduct');
    }
    public function productdelete($id)
    {
        $product = Product::findOrFail($id);
        $imgPath =  public_path("admin/upload/" . $product->img);
        if (file_exists($imgPath)) {
            unlink($imgPath);
        }
        $product->delete();
        return redirect()->route('admin.productlist');
    }
    public function showEditProductForm($id)
    {
        $categories = Category::categoryOrderByName()->get();


        $product = Product::findOrFail($id);
        return view('admin.editproduct', compact('categories', 'product'));
    }
    public function editproduct(Request $request)
    {
        $product = Product::editProduct($request);
        return redirect()->route('admin.productlist')->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }


    //Category
    public function categories()
    {
        $categories = Category::categoryOrderByName()->paginate(8);
        return view('admin.categories', compact('categories'));
    }
    public function showAddCategoryForm()
    {
        return view('admin.addcategory');
    }
    public function addcategory(Request $request)
    {
        $category = Category::addCategory($request);
        return redirect()->route('admin.categories');
    }
    public function deletecategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.categories');
    }

    //User
    public function newuser()
    {
        return view('admin.newuser');
    }
}
