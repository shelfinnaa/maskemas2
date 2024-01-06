@include('guestnavigation')
<div class="container m-5">
    <div class="row">
        <div class="col">
            @php
                $client = $clients[$order->client-1];
                $product = $products[$order->product-1];
                $status = $statuses[$order->status-1];
            @endphp

            <h1>Client = {{ $client->name }}</h1>
            <h1>Product = {{ $product->name }}</h1>
            <h1>Quantity = {{ $order->quantity }}</h1>
            <h1>Total Price = {{ $order->total_price }}</h1>
            <h1>Status = {{ $status->name }}</h1>

        </div>
    </div>

    </body>

    </html>
