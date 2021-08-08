<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'Invoice';


    // A invoice belongs to a customer
    
    public function customer() {

        return $this->hasOne(Customer::class, 'CustomerId');
    }
}