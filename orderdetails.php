
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


<!--/.AccountINformation  -->
<div class="card " style="width: 54rem; margin-left:20px;display:inline-block">


  <div class="card-body">
  <p></p>
 <p></p>
  <p></p>
    <h5 class="card-title" >Order Details</h5>
    
    <p class="card-text " id= "cart"><nav class="nav flex-column">
      <form>
      <div class="form-row">
        <div class="form-group col-md-6">
        <p></p>
 <p></p>
  <p></p>
        <table class="table table-bordered"style="margin-left:25%" >
  <thead>
  <tr >
      <th   >Username</th>
      <th >Payment Method</th>
      <th  >Total Tk</th>
      <th  >Date</th>
      <th  >Time Slot</th>
      <th  >Items</th>
      <th  >Comments</th>
    </tr>
  </thead>
  <tbody>
 
  <?php
$unilog=$_SESSION["log"];


$sql = "SELECT * FROM orderdetails where username='$unilog'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
    
    ?> <tr><td> <?php echo $unilog; ?></td>
    <td> <?php echo  $row["paymentmethod"]; ?></td>
    <td> <?php echo   $row["total"]; ?></td>
    <td> <?php echo   $row["date"]; ?></td>
    <td> <?php  echo   $row["timeslot"];?></td>
    <td > <?php echo  $row["items"]; ?></td>
    <td> <?php echo    $row["addcomment"]; ?></td> </tr>
    <?php
}

 ?>

    
     
  </tbody>
</table>
        
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
