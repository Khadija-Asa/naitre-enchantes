<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function index() {
        $customer = Customer::all();
        return view('customer', ['customers' => $customer]);
    }
    public function show($id) {
        $customer = Customer::all()->find($id);
        return view('showCustomer', ['customer' => $customer]);
    }
    public function edit($id) {
        $customer = Customer::all()->find($id);
        return view('editCustomer', ['customer' => $customer]);
    }
    public function update(Request $request, $id) {
        $customer = Customer::all()->find($id);
        $customer->fill($request->all());
        $customer->save();
        return redirect()->route('customer');
    }
public function create() {
    return view('createCustomer');
    }
    public function store(Request $request) {
        $customer = new Customer([
        'surname'=> $request->get('surname'),
        'name'=> $request->get('name'),
        'company_name'=> $request->get('company_name'),
        'address'=> $request->get('address'),
        'entrance'=> $request->get('entrance'),
        'post_code'=> $request->get('post_code'),
        'city'=> $request->get('city'),
        'phone_number'=> $request->get('phone_number'),
        'email'=> $request->get('email'),
    ]);
        $customer->save();
        return redirect()->route('customer');
    }
}