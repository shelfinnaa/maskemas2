@extends('admin.layouts.dashboard2')
@section('main')
    <div class="m-5">
        <h1>Edit {{ $content->name }}</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <div class="mt-3">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
        </div>
        <form action="{{ route('content.update', ['content' => $content->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="mt-5">Content Name</label>
                <input type="text" class="form-control mt-3" name="name" id="name" aria-describedby="name"
                    value="{{ $content->name }}" required>
            </div>
            <div class="form-group">
                <label for="content" class="mt-3">Content</label>
                <textarea class="form-control mt-3" id="content" name="content" rows="2" required>{{ $content->content }}</textarea>
            </div>
            <div class="form-group">
                <label class="mt-3">Image</label>
                <input type="file" name="image" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary mt-5">Update</button>
        </form>
    </div>
@endsection

</body>

</html>
