<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website_logoModel;
use Illuminate\Support\Str;


class WebsiteLogoController extends Controller
{
    public function website_logo(Request $request)
    {
        $data['getwebsite'] = Website_logoModel::find(1);
        $data['meta_title'] = 'Website Logo Update';

        return view('admin.website_logo.update', $data);
    }


    public function website_logo_update(Request $request)
    {
        $save = Website_logoModel::find(1);       
        $save -> website_name = trim($request->website_name);
       
        if(!empty($request->file('logo')))
        {
            /// old image remove start

            if(!empty($save->logo) && file_exists('upload/logo/'.$save->logo))
            {
                unlink('upload/logo/'.$save->logo);
            }
            
            /// old image remove end
       

            $file = $request->file('logo');
            $randomStr = Str::random(30);
            $filename = $randomStr.'.'.$file->getClientOriginalExtension();
            $file->move('upload/logo/', $filename);
            $save->logo = $filename;
        }
    
        $save -> save();

        return redirect('admin/website_logo')->with('success', 'Website Logo Update successfully..');

    }




}
