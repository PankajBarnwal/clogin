<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br>
    <a href="/UploadPage" style="font-size: 20px;"><- Register</a><br><br>
   
   <form action="home" method="POST">
       @csrf
    <input type="text" name="name" placeholder="enter name">
    <input type="email" name="email" placeholder="enter email"> 
    <button type="submit">Login</button>
   </form>
   
</body>
</html>