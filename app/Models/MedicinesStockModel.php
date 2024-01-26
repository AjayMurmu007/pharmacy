<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinesStockModel extends Model
{
    use HasFactory;

    protected $table = 'medicines_stock';

    public function getMedicinesName()
    {
        return $this  -> belongsto(MedicineModel::class, 'medicines_id');
    }
}
