@extends('admin.layouts.dashboard2')
@section('main')
<div class="m-5">
    <h1>Create New Product Type</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <form action="{{ route('producttypes.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="mt-4">Product Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
                placeholder="Enter Product Name" required>
        </div>
        <div class="form-group">
            <label class="mt-3">Product Code</label>
            <input type="text" class="form-control" name="code" id="code" aria-describedby="code"
                placeholder="Enter Product Code" required>
        </div>
        <div class="form-group">
            <label class="mt-3">Product Volume</label>
            <input type="text" class="form-control" name="volume" id="volume" aria-describedby="volume"
                placeholder="Enter Product Volume" required>
        </div>
        <div class="form-group">
            <label class="mt-3">Product Dimension</label>
            <input type="text" class="form-control" name="dimension" id="dimension" aria-describedby="dimension"
                placeholder="Enter Product Dimension" required>
        </div>
        <div class="form-group">
            <label class="mt-3">Product Pack Size</label>
            <input type="text" class="form-control" name="pack_size" id="pack_size" aria-describedby="pack_size"
                placeholder="Enter Product Pack Size" required>
        </div>
        <input type="hidden" name="product_id" value="{{ request('product_id') }}">
        <button type="submit" class="btn btn-primary mt-5">Create New</button>
    </form>
</div>
@endsection

</body>

</html>
