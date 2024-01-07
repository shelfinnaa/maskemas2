@extends('admin.layouts.dashboard2')

@section('main')
    <div class="container m-5">
        <div class="row">
            <div class="col">
                <h1>Orders</h1>
            </div>
            <div class="col-auto ms-auto">
                <a class="btn btn-success" href="{{ route('order.create') }}" role="button">Add New Order</a>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-sm">{{ session('message') }}</div>
        @endif

        @if ($orders->count() == 0)
            <h2>there are no Orders</h2>
        @else
            <table class="table table-striped mt-3">
                <tr>
                    <th>Order ID</th>
                    <th>Client</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->tracking_id }}</td>
                        <td>{{ $clients[$order->client - 1]->name }}</td>
                        <td>{{ $products[$order->product - 1]->name }}</td>
                        <td>x{{ $order->quantity }}</td>
                        <td>IDR {{ $order->total_price }} </td>
                        <td>{{ $statuses[$order->status - 1]->name }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ url('admin/order/show/' . $order->id) }}"
                                role="button">View Details</a>
                            <a class="btn btn-sm btn-warning" href="{{ url('admin/order/edit/' . $order->id) }}"
                                role="button">Update</a>
                            <a class="btn btn-sm btn-danger" {{-- onClick="return confirm('Are you sure, you want to delete this data?')"  --}}
                                href="{{ url('admin/order/delete' . $order->id) }}" role="button">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    @endsection
    {{--
        </body>

        </html> --}}
