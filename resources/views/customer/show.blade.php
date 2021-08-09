<h1>Invoices</h1>

<?php //dd($customer->customerInvoices) ?>
<?php// dd($customer->customerInvoices)?>
<?php //dd($total)?>


<h2>Customer ID: {{ $customer->CustomerId }} </h2>
<h2>Customer Name: {{ $customer->FirstName }} {{ $customer->LastName }} </h2>
  

<table border=1>
    <thread>
        <tr>
            <th> Invoice Id</th>
            <th> Invoice Date</th>
            <th> Address </th>
            <th> City</th>
            <th> Country</th>
            <th> Post Code </th>
            <th> Total </th>
        </tr>
    </thread>
    <tbody>
        @foreach ($customer->customerInvoices as $invoice)
        <tr> 
            
            <td>{{ $invoice->InvoiceId }}</td>
            <td>{{ $invoice->InvoiceDate->format('d/m/Y')}}</td>
            <td>{{ $invoice->BillingAddress }}</td>
            <td>{{ $invoice->BillingCity }}</td>
            <td>{{ $invoice->BillingState }}</td>
            <td>{{ $invoice->BillingPostalCode }}</td>
            <td>{{ $invoice->Total }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


<h3>Total spend: {{ $total }}</h3>


