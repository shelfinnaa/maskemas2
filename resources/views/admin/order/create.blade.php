@extends('admin.layouts.dashboard2')
@section('main')
    <div class="m-5">
        <h1>Adding Order</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-4">
                <label for="client">Select Client</label>
                <select name="client" class="form-control" id="client">
                    <option value="" disabled selected>Select a Client</option>
                    @if ($clients->count() > 0)
                        @foreach ($clients as $client)
                            <option value="<?= $client->id ?>"><?= $client->name ?></option>
                        @endforeach
                    @else
                        <option value="" disabled>THERE ARE NO CLIENTS</option>
                    @endif
                </select>
            </div>

            <div class="form-group mt-4">
                <label for="product">Select Product</label>
                <select name="product" class="form-control" id="product">
                    <option value="" disabled selected>Select a Product</option>
                    @foreach ($products as $product)
                        <option value="<?= $product->id ?>"><?= $product->name ?></option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mt-4">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Insert quantity"
                    required>

            </div>

            <div class="form-group mt-4">
                <label>Price per Item (IDR)</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Insert price"
                    required>
            </div>

            {{-- <div class="form-group mt-4">
                <label>Contact Info</label>
                <input type="string" name="contact_info" class="form-control" id="contact_info" placeholder="Not required">
            </div> --}}

            <div>
                <button type="submit" class="mt-4 btn btn-primary">Add new</button>
            </div>
        </form>
    </div>
@endsection

</body>

</html>
