<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectFriend {{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .user-card {
            margin-bottom: 20px;
        }

        .user-image {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item {{ ($title==='home')? 'active' : '' }}">
                    <a class="nav-link text-primary" href="#">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link" href="#">Feature</a>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

</body>

</html>
