<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create user</title>
</head>
<body>
    <form action="add-user" method="post">
        @csrf
        @method('post')
        <input type="text">
        <input type="submit">
    </form>
</body>
</html>