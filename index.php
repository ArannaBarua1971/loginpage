<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    
  <?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $email=$_POST['email'];
  $password=$_POST['pass'];
  $department=$_POST['depar'];

  $servername='localhost';
  $username='root';
  $pass='';
  $dbname='loginpage';

  $con =mysqli_connect($servername,$username,$pass,$dbname);

  if(!$con){
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
  <div>OPPs! your information is not got by us ...</div></div>';
  }
  $sql ="INSERT INTO `loginpage`.`information` (`email`, `password`, `DEPAR.`) VALUES ('$email', '$password', '$department')";
  $res=mysqli_query($con,$sql);

  if($res) 
  {
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
  <div>Success! your information is got by us ...</div></div>';
  }
  else{
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
  <div>OPPs! your information is not got by us ...</div></div>';

  }
}
?>
<script src="bootstrap.min.js"></script>;
</body>
</html>