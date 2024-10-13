<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Categories.css">
    <link rel="stylesheet" href="/Main.css">

</head>
<body>

    <div class="categories">
            @foreach ($categories as $category)
            <div class="category">
                <h3>{{ $category->name }}</h3>
                <p>{{ $category->categorie }}</p>
            </div>
            @endforeach
    </div>
</body>
</html>
