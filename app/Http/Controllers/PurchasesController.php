<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuppliersModel;
use App\Models\PurchasesModel;

class PurchasesController extends Controller
{
    public function purchases(Request $request)
    {
        $data['getRecord'] = PurchasesModel::get();
        $data['meta_title'] = 'Purchase List';
        
        return view('admin.purchase.list', $data);
    }

    public function add_purchases(Request $request)
    {
        $data['getsupplier'] = SuppliersModel::get();
        $data['getinvoice'] = SuppliersModel::get();

        return view('admin.purchase.add', $data);
    }   
    
    public function purchases_store(Request $request)
    {
        // dd($request->all()); 

        $save = new PurchasesModel;
        $save->suppliers_id = $request->suppliers_id;
        $save->invoices_id = $request->invoices_id;
        $save->voucher_number = $request->voucher_number;
        $save->purchase_date = $request->purchase_date;
        $save->total_amount = $request->total_amount;
        $save->payment_status = $request->payment_status;

        $save->save();

        return redirect('admin/purchases')->with('success', 'Purchase Data Store Successfully....');

    }       

    public function purchases_edit($id, Request $request)
    {
        $data['getsupplier'] = SuppliersModel::get();
        $data['getinvoice'] = SuppliersModel::get();
        $data['getRecord'] = PurchasesModel::find($id);

        return view('admin.purchase.edit', $data);
    }


    public function purchases_update($id, Request $request)
    {
        $update_record  = PurchasesModel::find($id);
        $update_record -> suppliers_id = $request->suppliers_id;
        $update_record -> invoices_id = $request->invoices_id;
        $update_record -> voucher_number = $request->voucher_number;
        $update_record -> purchase_date = $request->purchase_date;
        $update_record -> total_amount = $request->total_amount;
        $update_record -> payment_status = $request->payment_status;

        $update_record -> save();

        return redirect('admin/purchases')->with('success', 'Purchase Data update Successfully....');
        
    }


    public function purchases_delete($id, Request $request)
    {
        $deleteRecord = PurchasesModel::find($id);

        $deleteRecord -> delete();

       return redirect('admin/purchases')->with('error', 'Purchase succesfully delete....');

    }




}
