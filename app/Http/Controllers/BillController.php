<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{
    public function index(){
        if(Auth::guard('admin')->check()){
            $bills = Customer::join('bills', 'bills.customer_id', 'customers.id')->orderBy('bills.id', 'desc')
                ->paginate(6);
            return view('admin.bills.bills', compact('bills'));
        }else{
            return redirect('/admin/login');
        }

    }

    public function print($id){
        if(Auth::guard('admin')->check()){
            $bills = User::join('customers', 'customers.user_id', 'users.id')
                ->join('bills', 'bills.customer_id', 'customers.id')
                ->join('bill_details', 'bill_details.bill_id', 'bills.id')
                ->join('products', 'products.id', 'bill_details.product_id')
                ->where('customers.id', $id)
                ->get();

            dd($bills);
            exit();
//get(['customers.name as name_customer','customers.phone', 'customers.id', 'total' ,'products.name','products.original_price' , 'bill_details.quantity']
            return view('admin.print', compact('bills'));
        }else{
            return redirect('/admin/login');
        }

    }

}
