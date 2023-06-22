<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <base href="/public">
    @include('home.header')
    @include('home.style')
    <div class="container">
        <h1>Cart</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>name</td>
                    <td>quantity</td>
                    <td>price</td>
                    <td>total</td>
                </tr>

            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <h2>Total</h2>
                <p></p>
            </div>
            <div class="col-md-6">
                <a href="/checkout" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    </div>
    @include('home.footer')
</body>
</html>
