<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

    <h1>Product List</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>

</body>
</html>
