@extends('admin.layouts.dashboard2')
@section('main')
    <div class="container m-5">
        <div class="row">
            <div class="col">
                <h1>Feedback</h1>
            </div>
            <div class="col-auto ms-auto">
                <a class="btn btn-success" href="{{ route('feedback.create') }}" role="button">Add New Feedback</a>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-sm">{{ session('message') }}</div>
        @endif

        @if ($feedbacks->count() == 0)
            <h2>there are no feedbacks</h2>
        @else
            <table class="table table-striped mt-3">
                <tr>
                    <th>ID</th>
                    <th>Person</th>
                    <th>Client</th>
                    <th>Feedback</th>
                    <th>Actions</th>
                </tr>
                @foreach ($feedbacks as $feedback)
                    <tr>
                        <td><?= $feedback->id ?></td>
                        <td>{{ $feedback->person_name }} | {{ $feedback->person_title }}</td>
                        <td>{{ $clients[$feedback->client - 1]->name }}</td>
                        <td><?= $feedback->feedback ?></td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ url('admin/feedback/edit/' . $feedback->id) }}"
                                role="button">Update</a>
                            <a class="btn btn-sm btn-danger" {{-- onClick="return confirm('Are you sure, you want to delete this data?')"  --}}
                                href="{{ url('admin/feedback/delete/' . $feedback->id) }}" role="button">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    @endsection

    </body>

    </html>
