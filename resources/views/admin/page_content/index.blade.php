@extends('admin.layouts.dashboard2')

@section('main')
    <div class="container m-5">
        <div class="row">
            <div class="col">
                <h1>Page Content</h1>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-sm">{{ session('message') }}</div>
        @endif
        <!-- Home Page Table -->
        <div class="mt-5">
            <h3>Home Page</h3>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col" style="width: 10%;">Page</th>
                        <th scope="col" style="width: 20%;">Name</th>
                        <th scope="col" style="width: 50%;">Content</th>
                        <th scope="col" style="width: 10%;">Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($homeContents as $content)
                        <tr>
                            <td>{{ $content->pageKey->name }}</td>
                            <td>{{ $content->name }}</td>
                            <td>{{ $content->content }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning"
                                    href="{{ route('content.edit', ['content' => $content->id]) }}"
                                    role="button">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- About Page Table -->
        <div class="mt-5">
            <h3>About Page</h3>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col" style="width: 10%;">Page</th>
                        <th scope="col" style="width: 20%;">Name</th>
                        <th scope="col" style="width: 50%;">Content</th>
                        <th scope="col" style="width: 10%;">Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aboutContents as $content)
                        <tr>
                            <td>{{ $content->pageKey->name }}</td>
                            <td>{{ $content->name }}</td>
                            <td>{{ $content->content }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning"
                                    href="{{ route('content.edit', ['content' => $content->id]) }}"
                                    role="button">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Contact Page Table -->
        <div class="mt-5">
            <h3>Contact Page</h3>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col" style="width: 10%;">Page</th>
                        <th scope="col" style="width: 20%;">Name</th>
                        <th scope="col" style="width: 50%;">Content</th>
                        <th scope="col" style="width: 10%;">Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contactContents as $content)
                        <tr>
                            <td>{{ $content->pageKey->name }}</td>
                            <td>{{ $content->name }}</td>
                            <td>{{ $content->content }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning"
                                    href="{{ route('content.edit', ['content' => $content->id]) }}"
                                    role="button">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

    </body>
</div>



</html>
