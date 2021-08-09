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
                                         ->paginate(15);
                    
        $invoiceTotal = \App\Models\Invoice::groupBy('CustomerId')->orderBy('Total', 'DESC')->select([\DB::raw('SUM(Total) AS Total'), 'CustomerId'])->get();
         
         $topId = $invoiceTotal[0]->CustomerId;
         
        $topCustomer = \App\Models\Customer::select('CustomerId', 'FirstName', 'LastName')->where('CustomerId', $topId)->first();
         
        return view('customer.index', [
            'customers' => $customers,
            'topCustomer' => $topCustomer
        ]);
    }

    public function show($id) {
        
        
        
        $customer = \App\Models\Customer::with(['customerInvoices'])->where('CustomerId', $id)->first();
         
        $total = \App\Models\Invoice::select('Invoice.Total')->where('CustomerId', $id)->sum('Invoice.Total');
         
        $data = [
            'customer' => $customer,
            'total' => $total
        ];
            

        return view('customer.show')->with($data);
    }

    public function destroy($id) {
        
        $invoice = \App\Models\Invoice::select('InvoiceId')->where('InvoiceId', $id);


        $invoice->delete();

        return redirect('/');
    }
    
}
