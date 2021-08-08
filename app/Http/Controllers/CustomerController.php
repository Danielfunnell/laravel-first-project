<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{   
     /**
     * 
     * @var \Illuminate\Http\Request
     */
    protected $request;
    
    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index(){

        $customers = \App\Models\Customer::select('CustomerId', 'FirstName', 'LastName')
                                         ->orderBy('LastName', 'asc')
                                         ->get();
                    

        return view('customer.index', [
            'customers' => $customers
        ]);
    }

    public function show($id) {

         $customerInv = \App\Models\Customer::with('customerInvoices')->where('CustomerId', $id);

        return view('customer.show')->with('customerInv', $customerInv);
    }
}
