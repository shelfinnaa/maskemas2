@include('admin.adminnavigation')
<div class="m-5">
    <h1>Adding Order</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <form action="{{ route('order.update', ['order' => $order->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mt-4">
            <label for="client">Select Client</label>
            <select name="client" class="form-control" id="client">
                <option value="{{ $order->client }}" selected>{{ $clients[$order->client-1]->name }}</option>
                    @foreach ($clients as $client)
                        <option value="<?= $client->id ?>"><?= $client->name ?></option>
                    @endforeach
            </select>
        </div>

        <div class="form-group mt-4">
            <label for="product">Select Product</label>
            <select name="product" class="form-control" id="product">
                <option value="{{ $order->product }}" selected>{{ $products[$order->product-1]->name }}</option>
                @foreach ($products as $product)
                    <option value="<?= $product->id ?>"><?= $product->name ?></option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-4">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Insert quantity" value="{{ $order->quantity }}" required>
        </div>

        <div class="form-group mt-4">
            <label>Total Price (IDR)</label>
            <input type="number" name="total_price" class="form-control" id="total_price" placeholder="Insert price" value="{{ $order->total_price }}" required>
        </div>

        <div class="form-group mt-4">
            <label>Contact Info</label>
            <input type="string" name="contact_info" class="form-control" id="contact_info" value="{{ $order->contact }}" placeholder="Not required">
        </div>

        <div class="form-group mt-4">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status">
                <option value="{{ $order->status }}" selected>{{ $statuses[$order->status-1]->name }}</option>
                @foreach ($statuses as $status)
                    <option value="<?= $status->id ?>"><?= $status->name ?></option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="mt-4 btn btn-primary">Edit Order</button>
        </div>
    </form>
</div>
</body>

</html>
