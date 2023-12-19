<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Feedback</title>
</head>
<body>
    <h1>Adding Feedback</h1>
    <form method="POST" action="{{ route('feedback.store') }}">

        <div>
            <label for="client">Select Client</label>
            <select name="client" id="client">
                <option value="" disabled selected>Select a Client</option>
                @if($clients->count() > 0)
                <option value="">THERE ARE USERS</option>
                @else
                <option value="">THERE ARE NO USERS</option>
                @endif
            </select>
        </div>

        <div>
            <label>Client Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>

        <div>
            <label>Client Job Title</label>
            <input type="text" name="title" id="title" placeholder="E.g. Founder">
        </div>

        {{-- <label>Client Image</label>
        <input type="text" name="name" placeholder="Name"> --}}

        <div>
            <label>Client Feedback</label>
            <textarea name="feedback" id="feedback" cols="30" rows="10" placeholder="Client Feedback"></textarea>
        </div>

        <div>
            <label class="mt-3">Client Images</label>
            <input type="file" name="image[]" class="form-control" />
        </div>

        <div>
            <input type="submit" value="Add new Feedback">
        </div>

    </form>
</body>
</html>
