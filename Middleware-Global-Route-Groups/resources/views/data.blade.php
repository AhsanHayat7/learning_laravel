<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
</head>
<body>
    {{--<table>
        <thead>
            <tr>
                <th>Customer_ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>State</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($transformedData) && is_array($transformedData))
                @foreach($transformedData as $customer)
                    <tr>
                        <td>{{ isset($customer['customer_id']) ? $customer['customer_id'] : 'N/A' }}</td>
                        <td>{{ isset($customer['name']) ? $customer['name'] : 'N/A' }}</td>
                        <td>{{ isset($customer['email']) ? $customer['email'] : 'N/A' }}</td>
                        <td>{{ isset($customer['gender']) ? $customer['gender'] : 'N/A' }}</td>
                        <td>{{ isset($customer['address']) ? $customer['address'] : 'N/A' }}</td>
                        <td>{{ isset($customer['state']) ? $customer['state'] : 'N/A' }}</td>
                        <td>{{ isset($customer['country']) ? $customer['country'] : 'N/A' }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7">No data available</td>
                </tr>
            @endif
        </tbody>
    </table>--}}
</body>
</html>
