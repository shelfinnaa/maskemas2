@extends('guestnavigation')

@section('main')
    <div class="container m-5">
        <div class="row">
            <div class="col">
                <h1>{{ $user->name }}'s Orders</h1>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-sm">{{ session('message') }}</div>
        @endif
        @if ($orders->count() == 0)
            <h2>there are no Orders</h2>
        @endif

        <table class="table table-striped mt-3">
            <tr>
                <th>Order ID</th>
                <th>Client</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price Per Item</th>
                <th>Status</th>
            </tr>

            @if ($orders->count() != 0)
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->tracking_id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $products[$order->product - 1]->name }}</td>
                        <td>x{{ $order->quantity }}</td>
                        <td>IDR {{ $order->price }} </td>
                        <td>{{ $statuses[$order->status - 1]->name }}</td>
                    </tr>
                @endforeach
        </table>
        @endif
    @endsection
    {{--
        </body>

        </html> --}}
