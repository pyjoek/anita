<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">{{config('app.name')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/newF">Add Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/newD">Add Drink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/newTable">Add Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/del/foods">Delete Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/del/drinks">Delete Drinks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/waliokubali">Waiters Accepted</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm-12">
                <center>
                    <h1>Orders Placed</h1>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <div class="d-flex justify-content-around mb-3">
                        <a href="/admin1"><button class="btn btn-success">Orders</button></a>
                        <a href="/admin"><button class="btn btn-success">Request</button></a>
                    </div>
                </center>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Table Number</th>
                            <th scope="col">Food Ordered</th>
                            <th scope="col">Waiter Who Accepted</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accept as $order)
                        <tr>
                            <td>{{$order->tablename}}</td>
                            <td>{{$order->foodname}}</td>
                            <td>{{$order->username}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
