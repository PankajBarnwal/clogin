<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="/home">Home</a>
    <form action="{{url('/UploadData')}}" method="POST">
@csrf
    <br>        <div>
        <label for="">name</label>
        <input type="text" name="name" placeholder="Enter name">
        </div>
        <br>
        <div>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Enter email">
        </div>
<br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>