<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicesModel extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    public function getCustomerName()
    {
        return $this -> belongsto(CustomerModel::class, 'customer_id');
    }
    
    
}
