<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        if(Auth::guard('admin')->check()){
            $bills = Bill::all()->where('status', '=', 'Đã giao hàng')->sum('total');
            $categoríes = Category::all()->count();
            $products = Product::all()->count();
            $users = User::all()->count();
            $product = Product::join('bill_details', 'bill_details.product_id', 'products.id')
                ->join('bills', 'bills.id', 'bill_details.bill_id')
                ->where('status', 'Đang xử lý')
                ->take(5)
                ->get();
            $list_users = User::all();
            return view('admin.index', compact('bills', 'categoríes', 'products', 'users', 'list_users', 'product'));
        }else{
            return redirect('/admin/login');
        }

    }

    public function statistics(){
        if(Auth::guard('admin')->check()){
            $dateComponent = getdate();
            if(isset($_GET['month']) &&isset($_GET['year'])){
                $month = $_GET['month'];
                $year = $_GET['year'];
            }else{
                $month = $dateComponent['mon'];
                $year = $dateComponent['year'];
            }

            $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

            $dateComponents = getdate($firstDayOfMonth);


            $monthName = $dateComponents['month'];

            $datetoday = date('Y-m-d');

            $bills = User::join('customers', 'customers.user_id', 'users.id')
                ->join('bills', 'bills.customer_id', 'customers.id')
                ->whereYear('bills.created_at', $year)
                ->whereMonth('bills.created_at', $month)
                ->select('customers.name','customers.phone', 'customers.id', 'total' , 'bills.updated_at', 'status')
                ->paginate(5);

            $totals = Bill::whereYear('bills.created_at', $year)
                ->whereMonth('bills.created_at', $month)
                ->where('status', '=', 'Đã giao hàng')
                ->sum('total');

            return view('admin.statistics.statistics', compact('year', 'month', 'bills', 'totals'));
        }else{
            return redirect('/admin/login');
        }

    }

    public function processing($id){
        if(Auth::guard('admin')->check()){
            $bills = Bill::find($id);

            $bills->status = 'Đang vận chuyển';
            $bills->save();

            return redirect()->back();
        }else{
            return redirect('/admin/login');
        }

    }

    public function shipping($id){
        if(Auth::guard('admin')->check()){
            $bills = Bill::find($id);

            $bills->status = 'Đã giao hàng';
            $bills->save();

            return redirect()->back();
        }else{
            return redirect('/admin/login');
        }

    }

}

