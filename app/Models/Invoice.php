<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function customer():mixed {
        
        return this->belongsTo(Customer::class);
    }
}
