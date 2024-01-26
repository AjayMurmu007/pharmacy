<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomersController extends Controller
{
    public function customers(Request $request)
    {
        // echo 'ess';
        // die();

        // $data['getRecord'] = CustomerModel::get();         // 1st way
        $data['getRecord'] = CustomerModel::getAllRecord();   // 2nd way
        $data['meta_title'] = 'Customers List';
        
        return view('admin.customers.list', $data);
    }

    public function add_customers(Request $request)
    {
        // echo 'ess';
        // die();
        return view('admin.customers.add');
    }

    public function insert_add_customers(Request $request)
    {
        // dd($request->all());
        // die();
       
        $save = new CustomerModel;
        $save -> name = trim($request->name);
        $save -> contact_number = trim($request->contact_number);
        $save -> address = trim($request->address);
        $save -> doctor_name = trim($request->doctor_name);
        $save -> doctor_address = trim($request->doctor_address);
        $save -> save();

        return redirect('admin/customers')->with('success', 'Customer succesfully created....');
    }

    public function edit_customers($id, Request $request)
    {
        // echo $id;
        // die();

        // $data['getRecord'] = CustomerModel::find($id);       // 1st  way
        $data['getRecord'] = CustomerModel::getSingle($id);   // 2nd way
        return view('admin.customers.edit', $data);
    }
    
    public function update_customers($id, Request $request)
    {
        // $save = CustomerModel::find($id);         ///  1st way
        $save = CustomerModel::getSingle($id);       ///  2nd way
        $save -> name = trim($request->name);
        $save -> contact_number = trim($request->contact_number);
        $save -> address = trim($request->address);
        $save -> doctor_name = trim($request->doctor_name);
        $save -> doctor_address = trim($request->doctor_address);
        $save -> save();

        return redirect('admin/customers')->with('success', 'Customer succesfully updated....');
    }
    

    public function delete_customers($id, Request $request)
    {
        // echo 'ess';
        // die();

        // $delete_record = CustomerModel::find($id);             ///  1st way
        $delete_record = CustomerModel::getSingle($id);           ///  2nd way       
        $delete_record -> delete();

        return redirect('admin/customers')->with('error', 'Customer succesfully delete....');
    }

    
    
    
}