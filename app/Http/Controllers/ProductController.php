<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show(){
        if(Auth::guard('admin')->check()){
            $products = Product::join('categories', 'categories.id', 'products.categories_id')
                ->select('categories.name as name_categories', 'products.*')
                ->paginate(5);
            return view('admin.product.show_product', compact('products'));
        }else{
            return redirect('admin/login');
        }

    }

    public function index(){
        if(Auth::guard('admin')->check()){
            $categories = Category::all();
            return view('admin.product.add_product', compact('categories'));
        }else{
            return redirect('admin/login');
        }

    }

    public function store(Request $request){
        if(Auth::guard('admin')->check()){
            $products = new Product();
            $products->name = $request->input('tensanpham');
            $products->original_price = $request->input('gia');
            $products->description = $request->input('description');
            $products->promotion_price  = 0;
            $products->new_product = 0;
            $products->quantity = $request->input('soluong');
            $products->unit = $request->input('unit');
            $products->categories_id = $request->input('categories');

            if($file = $request->file('images')){
                $images = time().'-'.$file->getClientOriginalName();
                $file->move('../public/images/products/', $images);
            }
            $products->images = $images;

            $products->save();

            return redirect()->back();
        }else{
            return redirect('admin/login');
        }

    }

    public function edit($id){
        if(Auth::guard('admin')->check()){
            $product = Product::find($id);
            $categories = Category::all();
//        echo($product);
//        exit();
            return view('admin.product.edit_product', compact('product', 'categories'));
        }else{
            return redirect('admin/login');
        }

    }

    public function update($id, Request $request){
        if(Auth::guard('admin')->check()){
            $products = Product::find($id);
            $products->name = $request->input('tensanpham');
            $products->original_price = $request->input('gia');
            $products->description = $request->input('description');
            $products->promotion_price  = $request->input('giamgia');
            $products->new_product = $request->input('new_product');
            $products->unit = $request->input('unit');
            $products->quantity = $request->input('soluong');
            $products->categories_id = $request->input('categories');

            if($file = $request->file('images')){
                $images = time().'-'.$file->getClientOriginalName();
                $file->move('../public/images/products/', $images);
            }
            $products->images = $images;

            $products->save();

            return redirect()->back();
        }else{
            return redirect('admin/login');
        }

    }

    public function delete($id){
        if(Auth::guard('admin')->check()){
            $products = Product::find($id);
            $products->delete();

            return redirect()->back();
        }else{
            return redirect('admin/login');
        }

    }

}
