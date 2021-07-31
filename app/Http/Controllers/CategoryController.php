<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function show(){
        if(Auth::guard('admin')->check()){
            $categories = Category::paginate(5);

            return view('admin.category.show_category', compact('categories'));
        }else{
            return redirect('/admin/login');
        }
    }

    public function store(Request $request){
        if(Auth::guard('admin')->check()){
            $categories = new Category();
            $categories->name = $request->input('name_category');
            if($file = $request->file('images')){
                $images = time().'-'.$file->getClientOriginalName();
                $file->move('../public/images/category/', $images);
            }
            $categories->images = $images;

            $categories->save();

            return redirect()->back();
        }else{
            return redirect('/admin/login');
        }

    }

    public function index(){
        if(Auth::guard('admin')->check()){
            return view('admin.category.add_category');
        }else{
            return redirect('admin/login');
        }

    }

    public function edit($id){
        if(Auth::guard('admin')->check()){
            $category = Category::find($id);

            return view('admin.category.edit_category', compact('category'));
        }else{
            return redirect('admin/login');
        }

    }

    public function update($id, Request $request){
        if(Auth::guard('admin')->check()){
            $categories = Category::find($id);

            $categories->name = $request->input('name_category');
            if($file = $request->file('images')){
                $images = time().'-'.$file->getClientOriginalName();
                $file->move('../public/images/category/', $images);
            }
            $categories->images = $images;

            $categories->save();

            return redirect()->back();
        }else{
            return redirect('admin/login');
        }

    }

    public function delete($id){
        if(Auth::guard('admin')->check()){
            $category = Category::find($id);

            $category->delete($id);

            return redirect()->back();
        }else{
            return redirect('admin/login');
        }

    }

}
