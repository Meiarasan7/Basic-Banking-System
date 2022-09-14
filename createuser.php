<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
             .top {
  border: 2px outset ;
  background-image:url('img/bg.jpg');
  text-align: center;
  width:100%;
  color:white;
}
ul {
  border: 2px outset ;
  list-style-type: none;
 
  padding: 10;
  overflow: hidden;
  background-color: transparent;
}

li {
  float: left;

}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 15px 20px;
  text-decoration: none;
 
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #919286;
}
h1{
	color: white;
	font-weight: bold;
	transition: 0.5s;
}
h1:hover{
	transform: scale(1.1);}
  .fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}
.fa-linkedin {
  color: white;
}
.fa-youtube {
  color: white;
}
.fa-instagram {
  color: white;
}
      </style>
</head>

<body style="background:url('img/cu.jpg');overflow: Scroll;">
 
<div class="top">
    <center><table><tr>
    <td><img src="img/s.png" class="img-fluid" height="150px" width="150px" ></td>
  <td><h1>The Sparks Foundation</h1>
  <center><p>...inspiring,innovating,integrating.</p></center></td>
    </table></center>
  
  
<ul>
  <li><a  href="index.php" style="margin-left: 700px;">Home</a></li>
  <li><a  class="active" href="createuser.php" >Create User</a></li>
  <li><a href="transfermoney.php" >Transfer Money</a></li>
  <li><a href="transactionhistory.php" style="margin-right: 300px;">Transaction History</a></li>
</ul></div>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>



        <h2 class="text-center pt-4" style="color : black;">Create a User</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/user3.jpg" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

      <footer class="text-center mt-5 py-2"  style=" background-image:url('img/bg.jpg'); color:white;"><br>
        <p>&copy 2022. Made by <b>Meiarasan Koteswaran</b><br> 
        <a href="www.linkedin.com/in/meiarasan-koteswaran" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
        </p> 
      </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>