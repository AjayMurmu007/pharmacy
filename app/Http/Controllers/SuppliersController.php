<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuppliersModel;

class SuppliersController extends Controller
{
    public function suppliers(Request $request)
    {
        $data['getRecord'] = SuppliersModel::get();
        $data['meta_title'] ='Supplier List';
        
        return view('admin.suppliers.list', $data);
    }

    public function suppliers_add(Request $request)
    {
        return view('admin.suppliers.add');
    }

    public function  suppliers_add_insert(Request $request)
    {
        // dd($request->all());

        $save = new SuppliersModel;

        $save -> suppliers_name = trim($request->suppliers_name);
        $save -> suppliers_email = trim($request->suppliers_email);
        $save -> contact_number = trim($request->contact_number);
        $save -> address = trim($request->address);

        $save -> save();

        return redirect('admin/suppliers')->with('success', 'Supplier succesfully Add....');
    }


    public function edit_suppliers($id, Request $request)
    {
        // echo $id;
        // die();

        // $data['getRecord'] = SuppliersModel::find($id);       // 1st  way
        $data['getRecord'] = SuppliersModel::getSingle($id);   // 2nd way
        return view('admin.suppliers.edit', $data);
    }

    
    public function update_suppliers($id, Request $request)
    {
        // $save = SuppliersModel::find($id);         ///  1st way
        $save = SuppliersModel::getSingle($id);       ///  2nd way
        $save -> suppliers_name = trim($request->suppliers_name);
        $save -> suppliers_email = trim($request->suppliers_email);
        $save -> contact_number = trim($request->contact_number);
        $save -> address = trim($request->address);
    
        $save -> save();

        return redirect('admin/suppliers')->with('success', 'Suppplier succesfully updated....');
    }


    public function delete_suppliers($id, Request $request)
    {
        {
            // echo 'ess';
            // die();
    
            // $delete_record = SuppliersModel::find($id);             ///  1st way
            $delete_record = SuppliersModel::getSingle($id);           ///  2nd way       
            $delete_record -> delete();
    
            return redirect('admin/suppliers')->with('error', 'Suppplier succesfully delete....');
        }        
        
    }
    

    
   

    
}
