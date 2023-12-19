@include('admin.adminnavigation')
<div class="m-5">
    <div class="row">
        <div class="col">
            <h1> Edit Category</h1>
        </div>
        <div class="col-auto ms-auto">
            <a class="btn btn-success" href="{{ route('admincreateproducttype', ['product_id' => $product->id]) }}" role="button">Add New Product Type</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <div class="mt-3">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
    </div>
    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="mt-5">Category Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
                value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="description" class="mt-3">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" style="white-space: pre-line"
                required>{{ $product->description }} </textarea>
        </div>
        <div class="form-group">
            <label for="custom_message" class="mt-3">Custom Message</label>
            <textarea class="form-control" id="custom_message" name="custom_message" rows="2" required>{{ $product->custom_message }}</textarea>
        </div>
        <div class="form-group">
            <label class="mt-3">Images</label>
            <input type="file" name="image[]" multiple class="form-control" />
        </div>
        <div class="mt-3">
            @if ($product->productImages)
                @foreach ($product->productImages as $image)
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset($image->image_path) }}" style="width: 80px; height:80px; object-fit: cover;"
                            class="me-4 border" alt="Img" />
                        <a href="{{ route('product.image.delete', ['product_image_id' => $image->id]) }}">
                            <div class="position-absolute top-0 end-30">
                                <button type="button" class="close" aria-label="Close"
                                    style="background-color: rgba(255, 255, 255, 0.7); border: none; padding: 2px 5px;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <h5>No Image Added </h5>
            @endif
        </div>
        <div class="mt-5">
            @if ($product->productType->isNotEmpty())
            <h6> Product type</h6>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Volume</th>
                        <th scope="col">Dimension</th>
                        <th scope="col">Pack Size</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product->productType as $productType)
                    <tr>
                        <td>{{ $productType->name}}</td>
                        <td>{{ $productType->code}}</td>
                        <td>{{ $productType->volume}}</td>
                        <td>{{ $productType->dimension}}</td>
                        <td>{{ $productType->pack_size}}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{url('admin/producttype/'.$productType -> id.'/edit')}}" role="button">Update</a>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-danger" onClick="return confirm('Are you sure, you want to delete this data?')" href="{{ route('producttypes.delete', ['productTypeID' => $productType->id]) }}" role="button">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p>No Product Type </p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary mt-5">Update</button>
    </form>
</div>
</body>

</html>
