@extends('guestnavigation')

@section('style')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            text-align: center;
        }

        td.align-right {
            text-align: right;
        }
    </style>
@endsection

@section('main')
    <div class="container m-5">
        <div class="row">
            <div class="col">
                @php
                    $client = $clients[$order->client - 1];
                    $product = $products[$order->product - 1];
                    $status = $statuses[$order->status - 1];
                @endphp

                <table id="order-details" class="table table-responsive">
                    <tr>
                        <td>{{ $order->created_at->toDateString() }}</td>
                        <td>Created at</td>
                    </tr>
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>Client</td>
                    </tr>
                    <tr>
                    <tr>
                        <td> {{ $product->name }} <br>
                            <img src="{{ asset($product->productImages[0]->image_path) }}" alt="{{ $product->name }}"
                                style="width: 200px; height: 200px;">
                        </td>
                        <td>Product</td>
                    </tr>
                    </tr>
                    <tr>
                        <td>{{ $order->quantity }}</td>
                        <td>Quantity</td>
                    </tr>
                    <tr>
                        <td>{{ $order->price }}</td>
                        <td>Price Per Item (IDR)</td>
                    </tr>
                    <tr>
                        <td>{{ $order->total_price }}</td>
                        <td>Total Price (IDR)</td>
                    </tr>
                    <tr>
                        <td>
                            <ul class="list-unstyled">
                                @foreach ($statuses as $s)
                                    <li @if ($s->id == $status->id)
                                    class="h2"
                                    @endif
                                        >
                                        {{ $s->name }}
                                @endforeach
                            </ul>
                        </td>
                        {{-- <td>{{ $status->name }}</td> --}}
                        <td>Status</td>
                    </tr>
                </table>


            </div>
        </div>
        </body>

        </html>
    @endsection
