<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoicesModel;
use App\Models\CustomerModel;

class InvoicesController extends Controller
{
    public function invoices(Request $request)
    {
        $data['getRecord'] = InvoicesModel::get();
        $data['meta_title'] = 'Invoices List';
        
        return view('admin.invoices.list',  $data);
    }

    public function add_invoices(Request $request)
    {
        // echo 'ess';
        // die();
        $data['getRecord'] = CustomerModel::get();
        return view('admin.invoices.add', $data);
    }

    public function invoices_insert(Request $request)
    {
        // dd($request->all());

       $save = new InvoicesModel;

       $save -> net_total = trim($request->net_total);
       $save -> invoices_date = trim($request->invoices_date);
       $save -> customer_id = trim($request->customer_id);
       $save -> total_amount = trim($request->total_amount);
       $save -> total_discount = trim($request->total_discount);

       $save -> save();

       return redirect('admin/invoices')->with('success', 'Invoice succesfully created....');
    }


    public function edit_invoices($id, Request $request)
    {
        // echo $id;
        // die();

        $data['editRecord'] = InvoicesModel::find($id);
        $data['getRecord'] = CustomerModel::get();
        return view('admin.invoices.edit', $data);
    }


    public function update_invoices($id, Request $request)
    {
        // dd($request->all());

        $update = InvoicesModel::find($id);

        $update -> net_total = trim($request->net_total);
        $update -> invoices_date = trim($request->invoices_date);
        $update -> customer_id = trim($request->customer_id);
        $update -> total_amount = trim($request->total_amount);
        $update -> total_discount = trim($request->total_discount);

        $update -> save();

        return redirect('admin/invoices')->with('success', 'Invoice succesfully update....');
        
    }


    


    
    public function delete_invoices($id, Request $request)
    {
       
        $deleteRecord = InvoicesModel::find($id);

        $deleteRecord -> delete();

       return redirect('admin/invoices')->with('error', 'Invoice succesfully delete....');
    }

    

    

}