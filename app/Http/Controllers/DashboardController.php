<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\CustomerModel;
use App\Models\InvoicesModel;
use App\Models\MedicineModel;
use App\Models\MedicinesStockModel;
use App\Models\PurchasesModel;
use App\Models\SuppliersModel;

class DashboardController extends Controller
{

    public function dashboard(Request $request)
    {
        $data['TotalCustomer'] = CustomerModel::count();
        $data['TotalMedicines'] = MedicineModel::count();
        $data['TotalMedicinesStock'] = MedicinesStockModel::count();
        $data['TotalSupplier'] = SuppliersModel::count();
        $data['Totalinvoices'] = InvoicesModel::count();
        $data['Totalpurchases'] = PurchasesModel::count();
        $data['meta_title'] = 'Dashboard';

        return view('admin.dashboard.list', $data);
    }



    public function my_account(Request $request)
    {
        $data['getrecord'] = User::find(Auth::user()->id);
        $data['meta_title'] = 'Profile Update';

        return view('admin.my_account.update', $data);
    }

    


    public function my_account_update(Request $request)
    {
        $save = request()->validate([
            'email' =>'required|unique:users,email,'. Auth::user()->id
        ]);

        $save = User::find(Auth::user()->id);
        $save->name = trim($request->name);
        $save->email = trim($request->email);

        if(!empty($request->password))
        {
            $save->password = Hash::make($request->password);
        }

        // Profile

        if(!empty($request->file('profile_image')))
        {
            if(!empty($save->profile_image) && file_exists('upload/profile/'.$save->profile_image))
            {
                unlink('upload/profile/'.$save->profile_image);
            }
       

            $file = $request->file('profile_image');
            $randomStr = Str::random(30);
            $filename = $randomStr.'.'.$file->getClientOriginalExtension();
            $file->move('upload/profile/', $filename);
            $save->profile_image = $filename;
        }

        // profile end

        $save->save();

        return redirect('admin/my_account')->with('success', 'Profile update successfully...');

    }

    
}