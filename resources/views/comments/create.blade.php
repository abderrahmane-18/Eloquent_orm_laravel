<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Add new Comments </h3>
    <form action="{{route('comments.insert')}}" method="post">
    @csrf
    <input type="text" name="body" >
    
    <input type="submit" value="submit">

    </form>
  
</body>
</html>