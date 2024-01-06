<div class="container-fluid h-100">
    <div class="row h-100">


        <!-- Main content -->
        <section role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <!-- Your content goes here -->
            <h2>Main Content</h2>
            @section('main')
            @show
        </section>

        <!-- Sidebar -->
        <section class="col-md-2 d-none d-md-block bg-light sidebar h-100">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('feedback.index') }}">
                            Feedback
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order.index') }}">
                            Orders
                        </a>
                    </li>
                    <!-- Add more items as needed -->
                </ul>
            </div>
        </section>

    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
