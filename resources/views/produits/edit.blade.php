<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>edit product</h3>
<form action="{{route('produits.update',$pl->id)}}" method="post">
    @csrf
   @method('put')
    <input type="text" name="name"  value="{{$pl->name}}">
    <input type="text" name="price" value="{{$pl->price}}" >
    <input type="submit" value="submit">

    </form>
</body>
</html>