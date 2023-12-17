@include('admin.adminnavigation')
<div class="container m-5">
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
            @if ($products->isNotEmpty())
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            @endif
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
