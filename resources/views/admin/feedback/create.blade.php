@extends('admin.layouts.dashboard2')
@section('main')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <h1>Adding Feedback</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="client">Select Client</label>
            <select name="client" id="client" class="form-control">
                <option value="" disabled selected>Select a Client</option>
                @if ($clients->count() > 0)
                    @foreach ($clients as $client)
                        @if ($client->usertype == 'user')
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endif
                    @endforeach
                @else
                    <option value="" disabled>THERE ARE NO USERS</option>
                @endif
            </select>
        </div>

        <div class="form-group">
            <label>Client Name</label>
            <input type="text" name="person_name" id="person_name" placeholder="Name" required class="form-control">
        </div>

        <div class="form-group">
            <label>Client Job Title</label>
            <input type="text" name="person_title" id="person_title" placeholder="E.g. Founder" required
                class="form-control">
        </div>

        <div class="form-group">
            <label>Client Feedback</label>
            <textarea name="feedback" id="feedback" cols="30" rows="10" placeholder="Client Feedback" required
                class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label class="mt-3">Client Images</label>
            <input type="file" name="person_image" class="form-control" />
        </div>

        <div>
            <button type="submit" class="mt-4 btn btn-primary">Add new</button>
        </div>

    </form>
@endsection

</body>

</html>
