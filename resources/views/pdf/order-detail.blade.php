<!DOCTYPE html>
<html>

<head>
    <title>Order Details</title>
    <style>
    </style>
</head>

<body>
    <h1>Order Details</h1>
    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Customer Name:</strong> {{ $address->full_name }}</p>
    <p><strong>Address:</strong> {{ $address->street_address }}, {{ $address->city }}, {{ $address->state }}, {{ $address->zip_code }}</p>

    <h2>Items</h2>
    <ul>
        @foreach($order_items as $item)
            <li>{{ $item->product->name }} - Quantity: {{ $item->quantity }}</li>
        @endforeach
    </ul>

    <p><strong>Total Price:</strong> {{Number::currency($order->grand_total, 'IDR')}}</p>
</body>

</html>