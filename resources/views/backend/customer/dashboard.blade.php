<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <h5 class="card-header">Welcome to your Customer Dashboard</h5>
            <div class="card-body">
                <p class="card-text">You are logged in as a customer.</p>
                <p class="card-text">With this dashboard, you can manage your bookings, view your history, and more.</p>
                <p class="card-text">To get started, click on one of the links below.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="" class="btn btn-primary btn-block">View Bookings</a>
                    </li>
                    <li class="list-group-item"><a href="" class="btn btn-primary btn-block">View History</a>
                    </li>
                    <li class="list-group-item"><a href="" class="btn btn-primary btn-block">Update Profile</a>
                    </li>
                </ul>
                <form method="POST" action="{{ route('logout') }}" class="mt-3">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-block">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
