
<?php
if(isset($_POST['submit'])){
   // form was submitted
   $item=$_POST["username"];
   $password=$_POST["password"];

if($username=="Caroline"&&$password=="balos"||'aa'){
   echo"User{$username}
was successfully logged in";
}
else {
   $message="There were some errors.";
}
}
else{
   $username="";
   $message="Please log in.";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
     <title>Form</title>
  </head>
  <body>
   <?php echo $message; ?><br />
   <form action="register.php" method="post">
    Username:<input type="text" name="username" value="";/><br/>
    Password:<input type="password" name="password" value=""/><br/>
  <br/>
    <input type="submit" name="submit" value="Submit"/>
   </form>

  </body>
</html>
