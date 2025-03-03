<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <h5 class="card-header">Welcome to the Staff Admin Dashboard</h5>
            <div class="card-body">
                <p class="card-text">You are logged in as a staff member.</p>
                <p class="card-text">With this dashboard, you can manage the website's content, users, and other
                    resources.</p>
                <p class="card-text">To get started, click on one of the links below.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#" class="text-decoration-none">Manage Users</a></li>
                    <li class="list-group-item"><a href="#" class="text-decoration-none">Manage Content</a></li>
                    <li class="list-group-item"><a href="#" class="text-decoration-none">Manage Resources</a></li>
                </ul>
                <form method="POST" action="{{ route('logout') }}" class="mt-3">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
