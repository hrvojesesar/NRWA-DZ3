<!DOCTYPE html>
<html>
<head>
    <title>AJAX Fetch API - Customer Search</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
<h1>Customer Search</h1>
<input type="text" id="searchInput" placeholder="Search Customer">
<button onclick="searchCustomer()">Search</button>

<table id="customerTable">
    <thead>
    <tr>
        <th>CustomerID</th>
        <th>CompanyName</th>
        <th>ContactName</th>
        <th>ContactTitle</th>
        <th>Address</th>
        <th>City</th>
        <th>Region</th>
        <th>PostalCode</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Fax</th>
    </tr>
    </thead>
    <tbody id="customerTableBody"></tbody>
</table>

<script>
    function searchCustomer() {
        const searchInput = document.getElementById('searchInput').value;
        fetch('/search-customer', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ searchInput }),
        })
            .then(response => response.json())
            .then(data => {
                const customerTableBody = document.getElementById('customerTableBody');
                customerTableBody.innerHTML = '';
                data.forEach(customer => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${customer.CustomerID}</td>
                        <td>${customer.CompanyName}</td>
                        <td>${customer.ContactName}</td>
                        <td>${customer.ContactTitle}</td>
                        <td>${customer.Address}</td>
                        <td>${customer.City}</td>
                        <td>${customer.Region}</td>
                        <td>${customer.PostalCode}</td>
                        <td>${customer.Country}</td>
                        <td>${customer.Phone}</td>
                        <td>${customer.Fax}</td>
                    `;
                    customerTableBody.appendChild(row);
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>
</body>
</html>
