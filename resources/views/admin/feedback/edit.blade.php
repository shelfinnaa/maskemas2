@extends('admin.layouts.dashboard2')
@section('main')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <h1>Editing Feedback</h1>
    <form action="{{ route('feedback.update', ['feedback' => $feedback->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="client">Select Client</label>
            <select name="client" id="client">
                <option value="" disabled selected>Select a Client</option>
                @if ($clients->count() > 0)
                    @foreach ($clients as $client)
                        <option value="<?= $client->id ?>"><?= $client->name ?></option>
                    @endforeach
                @else
                    <option value="" disabled>THERE ARE NO USERS</option>
                @endif
            </select>
        </div>

        <div class="form-group">
            <label>Client Name</label>
            <input type="text" name="person_name" id="person_name" placeholder="Name" required class="form-control"
                value=<?= $feedback->person_name ?>>
        </div>

        <div class="form-group">
            <label>Client Job Title</label>
            <input type="text" name="person_title" id="person_title" placeholder="E.g. Founder" required
                value="<?= $feedback->person_title ?>">>
        </div>

        <div class="form-group">
            <label>Client Feedback</label>
            <textarea name="feedback" id="feedback" cols="30" rows="10" placeholder="Client Feedback" required><?= $feedback->feedback ?></textarea>
        </div>

        <div class="form-group">
            <label class="mt-3">Client Image</label>
            <input type="file" name="person_image" class="form-control" />
        </div>
        <div class="mt-3">
            @if ($feedback->person_image)
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset($feedback->person_image) }}" style="width: 80px; height:80px; object-fit: cover;"
                            class="me-4 border" alt="Img" />
                        <a href="{{ route('feedback.image.delete', ['feedback' => $feedback->id]) }}">
                            <div class="position-absolute top-0 end-30">
                                <button type="button" class="close" aria-label="Close"
                                    style="background-color: rgba(255, 255, 255, 0.7); border: none; padding: 2px 5px;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </a>
                    </div>
            @else
                <h5>No Image Added </h5>
            @endif
        </div>



        <div>
            <button type="submit" class="btn btn-primary mt-5">Edit <?= $feedback->person_name ?>'s Feedback</button>
        </div>
    </form>
@endsection

</body>

</html>
