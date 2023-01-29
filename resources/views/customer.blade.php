<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>{{$tittle}}</h1>
    <form action="{{$url}}" method="post">
        @csrf
        <label for="">NAME :</label>
        <input type="text" name="name" id="" placeholder="Enter Your Name" value="{{$customer->name}}"><br>
        <span>
            @error('name')
               {{$message}} 
            @enderror
        </span><br><br>
        <label for="">ADDRESS :</label>
        <input type="text" name="address" id="" placeholder="Enter Your Address" value="{{$customer->address}}"><br>
        <span>
            @error('address')
               {{$message}} 
            @enderror
        </span><br><br>
<button type="submit">SUBMIT</button>
    </form>
    
</body>
</html>