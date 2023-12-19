@include('admin.adminnavigation')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <h1>Adding Feedback</h1>
    <form method="POST" action="">

        <div class="form-group">
            <label for="client">Select Client</label>
            <select name="client" id="client">
                <option value="" disabled selected>Select a Client</option>
                @if($clients->count() > 0)
                @foreach ($clients as $client)
                    <option value="<?=$client->id?>"><?=$client->name?></option>
                @endforeach
                @else
                <option value="" disabled>THERE ARE NO USERS</option>
                @endif
            </select>
        </div>

        <div class="form-group">
            <label>Client Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>

        <div class="form-group">
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
