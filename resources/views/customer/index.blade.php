<<h1>Top Customer: {{ $topCustomer->FirstName}} {{ $topCustomer->LastName }} </h1>

<form action="/action_page.php">
  <label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
    <option value="select">Select an option</option>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>


<input type="text" id="input-box" placeholder="input box"> 

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

{{ $customers->links() }}



<script>
    const input = document.getElementById('input-box');
    const carsValue = document.getElementById('cars');
    input.style.display = 'none';


    carsValue.addEventListener('change', () => {
        const selection = carsValue.value;
        if (selection == 'volvo' || selection == 'opel'){
            input.style.display = 'block';
        } else {
            input.style.display = 'none';
        }
        
    });

    console.log(carsValue);

</script>