<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new blog</title>
</head>
<body>
<form method="POST" action="{{ route('add-blog') }}">
    @csrf
    <input type="text" name="description" placeholder="description">
    <input type="text" name="category_id" placeholder="category_id">
    <input type="text" name="price" placeholder="price">
    <button type="submit">Create</button>
    </form>
</body>
</html>