<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
</head>

<body>
    <h1>Orders</h1>
    <p>Index</p>
    <a href="{{ route('feedback.create') }}">create new order</a>

    @if ($orders->count() == 0)
        <h2>there are no orders</h2>
    @else
        <table>
            <tr>
                <th>ID</th>
                <th>Person</th>
                <th>Feedback</th>
                <th>Actions</th>
            </tr>
            @foreach ($feedbacks as $feedback)
                <tr>
                    <td><?= $feedback->id ?></td>
                    <td><?= $feedback->person_name ?></td>
                    <td><?= $feedback->feedback ?></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{url('feedback/'.$feedback -> id.'/edit')}}" role="button">Update</a>
                        <a class="btn btn-sm btn-danger"
                        {{-- onClick="return confirm('Are you sure, you want to delete this data?')"  --}}
                        href="{{url('feedback/'.$feedback -> id.'/delete')}}" role="button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

    @endif
</body>

</html>
