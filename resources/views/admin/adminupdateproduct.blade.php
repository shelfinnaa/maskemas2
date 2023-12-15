
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="m-5">
    <h1>Edit Product</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="mt-3">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    </div>
    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label class="mt-5">Product Name</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{$product->name}}" required>
        </div>
        <div class="form-group">
            <label for="description" class="mt-3">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" style="white-space: pre-line" required>{{$product->description}} </textarea>
        </div>
        <div class="form-group">
            <label for="custom_message" class="mt-3">Custom Message</label>
            <textarea class="form-control" id="custom_message" name="custom_message" rows="2" required>{{$product->custom_message}}</textarea>
        </div>
        <div class="form-group">
            <label class="mt-3">Images</label>
            <input type="file" name="image[]" multiple class="form-control"/>
        </div>
        <div class="mt-3">
            @if($product->productImages)
                @foreach($product->productImages as $image)
                    <div class="position-relative d-inline-block">
                        <img src="{{asset($image->image_path)}}" style="width: 80px; height:80px; object-fit: cover;" class="me-4 border" alt="Img" />
                        <a href="{{ route('product.image.delete', ['product_image_id' => $image->id]) }}">
                            <div class="position-absolute top-0 end-30">
                                <button type="button" class="close" aria-label="Close" style="background-color: rgba(255, 255, 255, 0.7); border: none; padding: 2px 5px;">
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



        <button type="submit" class="btn btn-primary mt-5">Update</button>
      </form>
  </body>
</html>
