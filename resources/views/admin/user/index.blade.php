@extends('admin.layouts.dashboard2')
@section('main')
    <div class="container m-5">
        <div class="row">
            <div class="col">
                <h1>Users</h1>
            </div>
            <div class="col-auto ms-auto">
                <a class="btn btn-success" href="{{ route('register') }}" role="button">Add New</a>
            </div>
        </div>

        @if (session('message'))
            <div class="alert alert-success alert-sm">{{ session('message') }}</div>
        @endif


        <table class="table table-striped">
            @if ($users->isNotEmpty())
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Privilege</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
            @endif
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->usertype }}</td>
                        <td>
                            @if ($user->usertype == 'user')
                                <a class="btn btn-sm btn-danger"
                                    onClick="return confirm('Are you sure, you want to delete this user?')"
                                    href="{{ route('user.delete', $user->id) }}" role="button">Delete</a>
                            @endif

                        </td>
                    </tr>
                @empty
                    <tr>
                    <tr colspan="7">No Users Available</th>
                    </tr>
                @endforelse
            </tbody>
        </table>

        </form>
    @endsection
</div>



</html>
