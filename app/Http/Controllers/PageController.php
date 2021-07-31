<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Cart;
use App\Category;
use App\Customer;
use App\Product;
use App\Review;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products_all = Product::paginate(8);
        $latest_products = Product::orderBy('id')->take(3)->get();
        $top_products = Product::join('reviews', 'reviews.product_id','products.id')
            ->where('rate', '>=', 4)
            ->get(['products.*']);
        $reviews = Review::pluck('product_id')->all();
        $reviews_product = Product::whereNotIn('id', $reviews)->take(3)->get(['products.*']);
        //return json_encode($products_all);
        return view('users.index', compact('categories', 'products_all', 'latest_products', 'top_products', 'reviews_product'));
    }

    public function shop(){
        $categories = Category::all();
        $products = Product::paginate(12);
        $products_old = Product::where('new_product', 1)->get();
        $latest_products = Product::orderBy('id')->take(3)->get();
        return view('users.shop', compact('products', 'products_old', 'categories', 'latest_products'));
    }

    public function product_detail($id){
        $categories = Category::all();
        $products = Product::find($id);
        $reviews = Review::join('users', 'users.id', 'reviews.user_id')
        ->where('product_id', $id)->get(['users.name', 'reviews.rate', 'reviews.description']);
        $related_products = Product::where('categories_id', $products->categories_id)->paginate(4);
        return view('users.product_detail', compact('products', 'related_products', 'reviews', 'categories'));
    }

    public function product_type($id){
        $categories = Category::all();
        $category = Category::find($id);
        $products = Product::where('categories_id', $id)->get();
        $latest_products = Product::orderBy('id')->take(3)->get();

        return view('users.typeproduct', compact('products', 'category', 'categories', 'latest_products'));
    }

    public function add_to_cart(Request $request){
        if (Auth::check()){
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $request->input('product_id');
            $cart->quantity = $request->input('quantity');

            $cart->save();

            return redirect('/');
        }else{
            return redirect('/login');
        }

    }

    public static function cartItem(){
        if(Auth::check()){
            $userId = Auth::user()->id;
            return Cart::where('user_id', $userId)->count();
        }else{
            return redirect('/login');
        }

    }

    public static function totalPrice(){
        if(Auth::check()){
            $userId = Auth::user()->id;
            $totals = Cart::join('products','products.id', 'carts.product_id')
                ->join('users','users.id', 'carts.user_id')
                ->where('carts.user_id', $userId)
                ->get(['carts.quantity', 'products.original_price']);

            $total = 0;

            foreach ($totals as $t){
                $total += $t->quantity * $t->original_price;
            }

            return $total;
        }else{
            return redirect('/login');
        }

    }

    public function showcart(){
        if(Auth::check()){
            $categories = Category::all();
            $userId = Auth::user()->id;
            $carts = Cart::join('products','products.id', 'carts.product_id')
                ->join('users','users.id', 'carts.user_id')
                ->where('carts.user_id', $userId)
                ->get(['carts.quantity', 'products.name', 'products.original_price', 'products.images']);
            $totals = Cart::join('products','products.id', 'carts.product_id')
                ->join('users','users.id', 'carts.user_id')
                ->where('carts.user_id', $userId)
                ->get(['carts.quantity', 'products.original_price']);

            $total = 0;

            foreach ($totals as $t){
                $total += $t->quantity * $t->original_price;
            }

            return view('users.cart', compact('carts', 'total', 'categories'));
        }else{
            return redirect('/login');
        }

    }


    public function checkout(){
        $categories = Category::all();
        return view('users.checkout', compact('categories'));
    }

    public function process_checkout(Request $request){
        if(Auth::check()){
            $userId = Auth::user()->id;
            $carts = Cart::join('products','products.id', 'carts.product_id')
                ->join('users','users.id', 'carts.user_id')
                ->where('carts.user_id', $userId)
                ->get(['carts.id', 'carts.quantity', 'carts.product_id', 'products.original_price']);

            $total = 0;

            foreach ($carts as $t){
                $total += $t->quantity * $t->original_price;
            }

            $customer = new Customer();
            $customer->user_id =  $userId;
            $customer->name = $request->input('name');
            $customer->email = $request->input('email');
            $customer->address = $request->input('address');
            $customer->phone = $request->input('phone');

            $customer->save();

            $bill = new Bill();
            $bill->customer_id = $customer->id;
            $bill->date_order = date('Y-m-d');
            $bill->total = $total;
            $bill->payment = $request->input('payment');
            $bill->note = $request->input('note');
            $bill->status = 'Đang xử lý';
            $bill->save();

            foreach ($carts as $cart){
                $bill_detail = new BillDetail();
                $bill_detail->bill_id = $bill->id;
                $bill_detail->product_id = $cart->product_id;
                $bill_detail->quantity = $cart->quantity;
                $bill_detail->original_price = $cart->original_price;
                $bill_detail->save();

                $products = Product::find($cart->product_id);
                $products->quantity = $products->quantity - ($cart->quantity * 0.5);
                $products->save();

                $cart->delete($cart->id);
            }

            return redirect('/');
        }else{
            return redirect('/login');
        }


    }

    public function orderStatus(){
        if(Auth::check()){
            $userId = Auth::user()->id;
            $bills = User::join('customers', 'customers.user_id', 'users.id')
                ->join('bills', 'bills.customer_id', 'customers.id')
                ->join('bill_details', 'bill_details.bill_id', 'bills.id')
                ->join('products', 'products.id', 'bill_details.product_id')
                ->where('users.id', $userId)
                ->get(['products.name','products.original_price', 'products.images' , 'bill_details.quantity', 'status', 'bills.created_at']);

            return view('users.orderstatus', compact('bills'));
        }else{
            return redirect('/login');
        }

    }

    public function profile(){
        if(Auth::check()){
            $categories = Category::all();
            $userId = Auth::user()->id;
            $users = User::find($userId);
            $address = User::join('customers', 'customers.user_id', 'users.id')
                ->get();

            return view('users.profile', compact('users', 'address', 'categories'));
        }else{
            return redirect('/login');
        }

    }

    public function review(Request $request, $id){

        if(Auth::check()){
            $userId = Auth::user()->id;
            $reviews = new Review();
            $reviews->user_id = $userId;
            $reviews->product_id = $id;
            $reviews->rate = $request->input('rating');
            $reviews->description = $request->input('description');
            $reviews->save();

            return redirect()->back();
        }else{
            return redirect('/login');
        }
    }


    public function contact(){
        $categories = Category::all();
        return view('users.contact', compact('categories'));
    }

}
