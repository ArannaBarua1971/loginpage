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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/project01/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
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