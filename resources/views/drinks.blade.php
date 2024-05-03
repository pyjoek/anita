<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Awesome App</title>
    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom CSS styles here -->
    <style>
        .product-row {
            margin-bottom: 20px;
        }
        .container{
            margin-top: 1rem;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">ARUSHA BACKPACKERS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="d-flex justify-content-around mb-3">
        <a href="/food"><button class="btn btn-success">Foods</button></a>
        <a href="/drinks"><button class="btn btn-success">Drinks</button></a>
    </div>

    <!-- start of the list of things in restaurant -->
    <!-- list of foods  -->
    <div class="row foods">
        @foreach ($drinks as $product)
        <div class="col-md-6 product-row"> <!-- Add product-row class to each column -->
            <div class="card">
                <div><img src="{{ asset('images/'.$product -> img) }}" height="200" class="card-img-top img-fluid" alt="{{ $product->foodname }}"></div>
                <div class="card-body d-flex justify-content-between">
                    <h5 class="card-title">{{ $product->drinkname }}</h5>
                    <p class="card-text">Price: {{ $product->price }}/= Tsh</p>
                </div>
                <div class="card-body d-flex justify-content-between">
                    <a href="/waiterD/{{$product -> id}}"><button class="btn btn-primary">Call Waiter</button></a>
                    <a href="/orderD/{{$product -> id}}"><button class="btn btn-primary">Place Order</button></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
