<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $url=url('/customer');
        $tittle="Customer Registration";
        $data=compact('url','tittle');
        return view('customer')->with ($data);
    }
    public function store(Request $request){

    //    echo "<pre>";
    //    print_r($request->all());
//insert query
        $customer =new Customer;
        $customer->name =$request['name'];
        $customer->address =$request['address'];
        $customer->save();
return redirect('/customer/view');
    }
    public function view() 
    {
        $customers = Customer::all();
        $data = compact('customers');
        
        return view("customer-view")->with($data);
    }
    public function delete($id){
    Customer::find($id)->delete();
    return redirect()->back();
    }
    public function edit($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            //not found
            return redirect('customer');
        }else{
            $tittle="Update Customer";
            $url=url('/customer/update') ."/". $id;
            $data = compact('customer', 'url','tittle');
            return view('customer')->with($data);
        }
        }
        public function update($id, Request $request){
            $customer = Customer::find($id);
            $customer->name =  $request['name'];
            $customer->address =  $request['address'];
            $customer->save();
            return redirect('customer');
        }
        }
