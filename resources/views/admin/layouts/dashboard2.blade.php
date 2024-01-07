<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #sidebar {
            position: fixed;
            width: 250px;
            height: 100%;
            background: #343a40;
            /* Sidebar background color */
            color: #fff;
            padding-top: 20px;

            text-align: center;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Optional: Add styles for sidebar links */
        #sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            transition: 0.3s;
        }

        /* Optional: Add hover effect on sidebar links */
        #sidebar a:hover {
            background-color: #555;
        }
    </style>
    <title>Dashboard Sidebar</title>
</head>

<body>

    <div id="sidebar" class="m-auto">
        <h2>Maskemas</h2>
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
                <a class="nav-link" href="{{ route('products.index') }}">
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
        </ul>
    </div>

    <div id="content">
        <h2>Main Content</h2>
        @section('main')
        @show
    </div>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
