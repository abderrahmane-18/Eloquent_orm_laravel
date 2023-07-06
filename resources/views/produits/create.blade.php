<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Add new Product </h3>
    <form action="{{route('produits.store')}}" method="post">
    @csrf
    <input type="text" name="name" >
    <input type="text" name="price" >
    <input type="submit" value="submit">

    </form>
  
</body>
</html>