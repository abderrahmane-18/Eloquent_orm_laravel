<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h2>show data destroyed</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
   
      <th scope="col">price</th>
      <th scope="col">name</th>
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($p as $i)
    <tr>
      <th scope="row">{{$i->id}}</th>
     
      <td>{{$i->price}}</td>
      <td>{{$i->name}}</td>
      
    </tr>
    <tr>
    
     
    @endforeach
  </tbody>
</table> 
</body>
</html>