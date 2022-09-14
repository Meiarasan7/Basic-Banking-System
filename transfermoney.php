<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
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

<body style="background:url('img/th.jpg');  overflow: Scroll;">
<div class="top">
    <center><table><tr>
    <td><img src="img/s.png" class="img-fluid" height="150px" width="150px" ></td>
  <td><h1 style="color:white">The Sparks Foundation</h1>
  <center><p>...inspiring,innovating,integrating.</p></center></td>
    </table></center>
  
  
<ul>
  <li><a  href="index.php" style="margin-left: 700px;">Home</a></li>
  <li><a href="createuser.php" >Create User</a></li>
  <li><a class="active" href="transfermoney.php" >Transfer Money</a></li>
  <li><a href="transactionhistory.php" style="margin-right: 300px;">Transaction History</a></li>
</ul></div>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color :#919286">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
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