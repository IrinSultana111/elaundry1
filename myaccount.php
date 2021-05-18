
<?php include('connection.php') ?>
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php include('cdn.php') ?>
  </head>
  <body style=" background-image: url('background.jpg');">
    <!--Navbar -->
    <?php include('navbar.php') ?>
<!--/.Navbar  -->
<!--/.card user  -->
<div class="card " style="width: 18rem;margin-top:150px;margin-left:15%; display:inline-block">

  <div class="card-body">
    <h5 class="card-title" >Account</h5>
    <p class="card-text " id= "cart"><nav class="nav flex-column">
  <a class="nav-link active" href="/elaundry1/myaccount.php">Profile</a>
  <a class="nav-link active" href="/elaundry1/orderdetails.php">Order History</a>


</nav></p>

  </div>
</div>
<!--/.card user  -->
<?php
$unilog=$_SESSION["log"];


$sql = "SELECT * FROM user where username='$unilog'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
   $Email= $row["email"];
   $cnumber= $row["cno"];
   $FullName= $row["fullname"];
   $Address= $row["address"];
   $Area= $row["area"];
}

 ?>
<!--/.AccountINformation  -->
<div class="card " style="width: 54rem;margin-left:20px;display:inline-block">

  <div class="card-body">
    <h5 class="card-title" >Details</h5>
    <p class="card-text " id= "cart"><nav class="nav flex-column">
      <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Full Name</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="<?php echo $FullName?>">

    
           
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Phone Number</label>
          <input type="text" class="form-control"  placeholder="<?php echo $cnumber?>" >
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Email</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="<?php echo $Email?>">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="<?php echo $Address?>">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Area</label>
          <input type="text" class="form-control" id="inputCity" placeholder="<?php echo $Area?>">
        </div>
       
        
      </div>
      <div class="form-group">
        <div class="form-check">


        </div>
      </div>
    
    </form>

</nav></p>

  </div>
</div>
<!--/.AccountINformation  -->


<?php include('footer.php') ?>
  </body>
</html>
