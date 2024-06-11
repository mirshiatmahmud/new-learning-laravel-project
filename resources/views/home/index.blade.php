<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>This is Home page</h1>
    <h1>My name is {{$name}}</h1>
    <h1>My age is {{$age}}</h1>
    <?php
        foreach([$subject,$marks] as [$x,$y,$z]){
            echo $x.$y.$z;
        }
    ?>
</body>
</html>