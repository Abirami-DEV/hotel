<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/foods" method="POST">
        @csrf
       Food Name : <input type="text" name="name">
       Food Price : <input type="number" name="price" id="price">

       <button type="submit">Save</button>
    </form>
</body>
</html>