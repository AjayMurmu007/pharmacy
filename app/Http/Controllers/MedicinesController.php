<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicineModel;
use App\Models\MedicinesStockModel;


class MedicinesController extends Controller
{
    public function medicines(Request $request)
    {
        // echo 'ess';
        // die();

        // $data['getRecord'] = MedicineModel::get();         // 1st way
        $data['getRecord'] = MedicineModel::where('is_delete', '=', 0) -> get();
        // $data['getRecord'] = MedicineModel::getAllRecord();   // 2nd way
        $data['meta_title'] = 'Medicines List';

        return view('admin.medicines.list',  $data);
        
    }

    public function add_medicines(Request $request)
    {
        // echo 'ess';
        // die();

        return view('admin.medicines.add');
        // return redirect('admin/customers')->with('error', 'Customer succesfully delete....');
    }

    public function insert_add_medicines(Request $request)
    {
        // dd($request->all());

        $save = new MedicineModel;

        $save -> name = $request->name;
        $save -> packing = $request->packing;  
        $save -> generic_name = $request->generic_name;
        $save -> supplier_name = $request->supplier_name;
        $save -> save();
        

        return redirect('admin/medicines')->with('success', 'Medicine succesfully Add....');
    }


    public function edit_medicines($id, Request $request)
    {
        // echo $id;
        // die();

        $data['getRecord'] = MedicineModel::find($id);           // 1st  way
        // $data['getRecord'] = MedicineModel::getSingle($id);   // 2nd way
        return view('admin.medicines.edit', $data);
    }


    public function update_medicines($id = '', Request $request)
    {
        
        if(!empty($id))
        {
            $save = MedicineModel::find($id);
        }
        else
        {
            $save = new MedicineModel;
        }

        $save -> name = $request->name;
        $save -> packing = $request->packing;  
        $save -> generic_name = $request->generic_name;
        $save -> supplier_name = $request->supplier_name;
        $save -> save();             
        
        
        return redirect('admin/medicines')->with('success', 'Medicine succesfully update....');
    }
    

    public function delete_medicines($id, Request $request)
    {
       $delete_record = MedicineModel::find($id);             ///  1st way
            
    //    $delete_record -> is_delete = 1;
    //    $delete_record -> save();

       $delete_record -> delete();

       return redirect('admin/medicines')->with('success', 'Record Delete....');
    }

    public function medicines_stock(Request $request)
    {
        $data['getRecord'] = MedicinesStockModel::get();
        $data['meta_title'] = 'Medicines Stock List';

        return view('admin.medicines_stock.list', $data);
    }
    
    public function  medicines_stock_add(Request $request)
    {
        $data['getRecord'] = MedicineModel::where('is_delete', '=', 0) -> get();
        return view('admin.medicines_stock.add', $data);
    }
    

    public function medicines_stock_insert(Request $request)
    {
        $save = new MedicinesStockModel;

        $save -> medicines_id = $request->medicines_id;
        $save -> batch_id = $request->batch_id;  
        $save -> expiry_date = $request->expiry_date;
        $save -> quatity = $request->quatity;
        $save -> mrp = $request->mrp;
        $save -> rate = $request->rate;
        $save -> save();

        return redirect('admin/medicines_stock') -> with('success', 'Medicine stock succesfully save....');

    }


    public function medicines_stock_edit($id, Request $request)
    {
        
        $data['oldRecord'] = MedicinesStockModel::find($id);  
        $data['getRecord'] = MedicineModel::where('is_delete', '=', 0) -> get();

        return view('admin.medicines_stock.edit', $data);

    }


    public function medicines_stock_update($id = '', Request $request)
    {
        
        if(!empty($id))
        {
            $save = MedicinesStockModel::find($id);
        }
        else
        {
            $save = new MedicinesStockModel;
        }

        $save -> medicines_id = $request->medicines_id;
        $save -> batch_id = $request->batch_id;  
        $save -> expiry_date = $request->expiry_date;
        $save -> quatity = $request->quatity;
        $save -> mrp = $request->mrp;
        $save -> rate = $request->rate;
        $save -> save();             
        
        
        return redirect('admin/medicines_stock')->with('success', 'Medicine Stock succesfully update....');
    }


    public function medicines_stock_delete($id, Request $request)
    {
       $delete_record = MedicinesStockModel::find($id);             ///  1st way
            
    //    $delete_record -> is_delete = 1;
    //    $delete_record -> save();

       $delete_record -> delete();

       return redirect('admin/medicines_stock')->with('error', 'Stock Record Delete....');
    }
    
    
    

    
}
