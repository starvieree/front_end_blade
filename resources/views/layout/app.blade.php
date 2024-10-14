<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>User List - Tutorial CRUD Laravel 11 @ qadrlabs.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* General styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        /* Navbar styling */
        .navbar {
            background-color: #343a40;
            color: #fff;
        }

        .navbar .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff !important;
        }

        .navbar .navbar-nav .nav-link:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        /* Sidebar styling */
        #sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            background-color: #343a40;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar .sidebar-heading {
            padding: 1rem;
            font-size: 1.2rem;
            background-color: #212529;
        }

        #sidebar ul.list-group {
            padding: 0;
        }

        #sidebar ul.list-group li {
            border: none;
            background-color: transparent;
        }

        #sidebar ul.list-group li a {
            padding: 1rem;
            font-size: 1.1rem;
            color: #adb5bd;
            display: block;
            text-decoration: none;
            transition: all 0.3s;
        }

        #sidebar ul.list-group li a:hover {
            background-color: #495057;
            color: #fff;
            border-radius: 5px;
        }

        /* For responsive layout */
        #page-content-wrapper {
            margin-left: 250px;
            padding: 2rem;
            transition: all 0.3s;
        }

        /* Animation on toggle (optional) */
        #sidebar.active {
            margin-left: -250px;
        }

        #page-content-wrapper.active {
            margin-left: 0;
        }

        /* Button to toggle sidebar */
        #sidebarToggle {
            background-color: #343a40;
            border: none;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            position: fixed;
            left: 10px;
            top: 10px;
            border-radius: 5px;
        }

        #sidebarToggle:hover {
            background-color: #495057;
        }

        /* Style for content cards (optional) */
        .content-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content-card h5 {
            color: #343a40;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @yield('admin')
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
