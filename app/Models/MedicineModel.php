<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineModel extends Model
{
    use HasFactory;

    protected $table = 'medicines';

    ///// 2nd way /////
    // static public function getAllRecord()
    // {
    //     return self::get();
    // }
    //////////////////


    
    ///// 2nd way /////
    static public function getSingle($id)
    {
        // return self::get();             ///  1st way
        return self::find($id);         ///  2nd way
    }
    //////////////////
    
}
