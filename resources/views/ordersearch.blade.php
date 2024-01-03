@include('guestnavigation')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h1 class="text-primary">Track Your Order</h1>

            <!-- Search Form -->
            <form method="GET" action="{{ route('order.search') }}" class="mt-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Order ID..." name="order_id">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Track</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
