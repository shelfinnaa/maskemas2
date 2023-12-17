<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Products</h1>
        </div>
        <div class="col-auto ms-auto">
            <a class="btn btn-success" href="{{ route('products.create') }}" role="button">Add New</a>
        </div>
    </div>
    <body class="m-5">
        @if (session('message'))
            <div class="alert alert-success alert-sm">{{ session('message') }}</div>
        @endif


        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
              <tr>
                <td>{{$product -> name}}</td>
                <td>
                <a class="btn btn-sm btn-warning" href="{{url('admin/products/'.$product -> id.'/edit')}}" role="button">Update</a>
                </td>
                <td>
                <a class="btn btn-sm btn-danger" onClick="return confirm('Are you sure, you want to delete this data?')" href="{{url('admin/products/'.$product -> id.'/delete')}}" role="button">Delete</a>
                </td>
              </tr>
              @empty
              <tr>
                <tr colspan="7">No Products Available</th>
              </tr>
              @endforelse
            </tbody>
          </table>

        </form>
    </body>
</div>



</html>
