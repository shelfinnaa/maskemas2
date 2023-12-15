
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="m-5">
    <h1>Create New Product</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label class="mt-5">Product Name</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter Product Name" required>
        </div>
        <div class="form-group">
            <label for="description" class="mt-3">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter description" required></textarea>
        </div>
        <div class="form-group">
            <label for="custom_message" class="mt-3">Custom Message</label>
            <textarea class="form-control" id="custom_message" name="custom_message" rows="2" placeholder="Enter Custom Message" required></textarea>
        </div>
        <div class="form-group">
            <label class="mt-3">Images</label>
            <input type="file" name="image[]" multiple class="form-control"/>
        </div>

        <button type="submit" class="btn btn-primary mt-5">Create New</button>
      </form>
  </body>
</html>