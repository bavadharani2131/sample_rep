<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My first php page</title>
</head>
<body>
     <form action="" method="POST">
      User Name: <input type="text" name="fname" id="n1">
      Password: <input type="text" name="pass" id="pas">
      <button type="submit" name="btn">Login</button>
     </form> 
     <?php
       if(isset($_POST["btn"]))
     {
        $name=$_POST["fname"];
        $pass=$_POST["pass"];
        $str=$name." ".$pass;
       echo "<script>alert('welcome!! $str')</script>";
     }
    
     ?>
</body>
</html>