@include('guestnavigation')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="section-title-area ltn__section-title-2 text-center">
                <h1 class="section-title">Track your Order</h1>
            </div>
            @if (session('message'))
                <div class="alert alert-danger alert-sm">{{ session('message') }}</div>
            @endif

            <!-- Search Form -->
            <form method="HEAD" action="{{ route('order.track') }}" class="mt-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Order ID..." name="tracking_id"
                        id="tracking_id">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Track</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
