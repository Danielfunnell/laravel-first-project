<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'Invoice';
    protected $primaryKey = 'invoiceId';

    protected $dates = ['InvoiceDate'];
    // A invoice belongs to a customer
    
    public function customer() {

        return $this->belongsTo(Customer::class, 'CustomerId');
    }
}
