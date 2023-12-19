@include('admin.adminnavigation')
<div class="m-5">
    <h1>Update Product Type</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <form action="{{ route('producttypes.update', ['productTypeID' => $producttype->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="mt-4">Product Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
            value="{{ $producttype->name }}" required>
        </div>
        <div class="form-group">
            <label class="mt-3">Product Code</label>
            <input type="text" class="form-control" name="code" id="code" aria-describedby="code"
            value="{{ $producttype->code }}" required>
        </div>
        <div class="form-group">
            <label class="mt-3">Product Volume</label>
            <input type="text" class="form-control" name="volume" id="volume" aria-describedby="volume"
            value="{{ $producttype->volume }}" required>
        </div>
        <div class="form-group">
            <label class="mt-3">Product Dimension</label>
            <input type="text" class="form-control" name="dimension" id="dimension" aria-describedby="dimension"
            value="{{ $producttype->dimension }}" required>
        </div>
        <div class="form-group">
            <label class="mt-3">Product Pack Size</label>
            <input type="text" class="form-control" name="pack_size" id="pack_size" aria-describedby="pack_size"
            value="{{ $producttype->pack_size }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-5">Update</button>
    </form>
</div>
</body>

</html>
