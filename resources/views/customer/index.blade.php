<table border=1>
    <thread>
        <tr>
            <th> Customer ID</th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> View Invoices</th>
        </tr>
    </thread>
    <tbody>
        @foreach ($customers as $customer)
        <tr> 
            <td>{{ $customer['CustomerId']  }}</td>
            <td>{{ $customer['FirstName'] }}</td>
            <td>{{ $customer['LastName'] }}</td>
            <td><a href="/customer/show/{{ $customer['CustomerId'] }}">Invoices</a></td>
        </tr>
        @endforeach
    </tbody>

</table>

