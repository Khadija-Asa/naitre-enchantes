<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function index() {
        $product = Customer::all();
        return view('customer', ['customers' => $customer]);
    }
    public function show($id) {
        $product = Customer::all()->find($id);
        return view('showCustomer', ['customer' => $customer]);
    }
    public function edit($id) {
        $product = Customer::all()->find($id);
        return view('editCustomer', ['customer' => $customer]);
    }
    public function update(Request $request, $id) {
        $product = Customer::all()->find($id);
        $product->fill($request->all());
        $product->save();
        return redirect()->route('customer');
    }
public function create() {
    return view('createCustomer');
    }
    public function store(Request $request) {
        $company = new Customer([
        'name'=> $request->get('name'),
        'surname'=> $request->get('surname'),
        'company_name'=> $request->get('company_name'),
        'address'=> $request->get('address'),
        'entrance'=> $request->get('entrance'),
        'post_code'=> $request->get('post_code'),
        'city'=> $request->get('city'),
        'phone_number'=> $request->get('phone_number'),
        'email'=> $request->get('email'),
    ]);
        $company->save();
        return redirect()->route('product');
    }
}