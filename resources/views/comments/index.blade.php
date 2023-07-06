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
    <h2>show data</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
   
      <th scope="col">body</th>
   
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($p as $i)
    <tr>
      <th scope="row">{{$i->id}}</th>
      <td>{{$i->body}}</td>
      <td >
      <form action="{{route('comments.destroy',$i->id)}}" method="post">
        @csrf
        @method('delete')
         <button type="submit">delete</button>
      </form>
      
     
      
    </td>
    </tr>
    <tr>
    
     
    @endforeach
  </tbody>
</table> 
</body>
</html>