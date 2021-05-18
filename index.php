<?php
session_start();

?>
<?php include('connection.php') ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php include('cdn.php') ?>
  </head>
  <body class="body1">



<form method="post">
<div class="shadow p-3 mb-5 bg-white rounded box">





     <input class= "form-control kire" type="text" placeholder="Username" name="Username">
     <input class= "form-control pass" type="password" placeholder="Password" name="passlog">
     <button type="submit " class="btn btn-primary login" name="login">Login</button>


     <?php

     if (isset($_POST['login']))
     {


       $_SESSION["log"]=$_POST['Username'];
       $unilog=$_POST['Username'];
     $logpass=$_POST['passlog'];

       $sql = "SELECT * FROM user where username='$unilog'";
       $result = $conn->query($sql);

       while($row = $result->fetch_assoc())
       {
          $storepass= $row["pass"];


          if($logpass==$storepass)
          {

            header("Location: display.php");
          }
          else
          {
            echo '<script type="text/javascript">sweetAlert("", "Wrong Password", "error");</script>';
          }
       }



     }


      ?>


     <!-- Button trigger modal -->
 <button type="button" class="btn btn-danger mbutton" data-toggle="modal" data-target="#exampleModalCenter">
   Sign Up
 </button>

 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalCenterTitle">Registration</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
        <!-- Modal  -->
       <div class="modal-body modaldesign">
         <div class="form-group">
             <label for="CustName" class="col-sm-3 control-label">Username</label>
             <div class="col-sm-6">
                 <input type="text" class="form-control" id="CustName" name="uni" placeholder="Username">
             </div>
         </div>
         <div class="form-group">
             <label for="CustName" class="col-sm-3 control-label">Name</label>
             <div class="col-sm-6">
                 <input type="text" class="form-control" id="CustName" name="CustName" placeholder="Full Name">
             </div>
         </div>
         <div class="form-group">
             <label for="CustEmail" class="col-sm-3 control-label">Email</label>
             <div class="col-sm-6">
                 <input type="text" class="form-control" id="CustEmail" name="CustEmail" placeholder="Email Address">
             </div>
         </div>
         <div class="form-group">
             <label for="CustMobile" class="col-sm-3 control-label">Contact No</label>
             <div class="col-sm-6">
                 <input type="text" class="form-control" id="CustMobile" name="CustMobile" placeholder="Contact No">
             </div>
         </div>
         <div class="form-group">
             <label for="CustAddress" class="col-sm-3 control-label">Address</label>
             <div class="col-sm-6">
                 <textarea class="form-control" name="CustAddress" id="CustAddress" placeholder="Address"></textarea>
             </div>
         </div>
         <div class="form-group">
             <label for="CustArea" class="col-sm-3 control-label">Area</label>
             <div class="col-sm-6">
                 <select class="form-control" name="CustArea" id="CustArea">
                     <option value="">Select Area</option>
                     <option value="Gulshan">Gulshan</option><option value="Banani">Banani</option><option value="Uttara">Uttara</option><option value="Bashundhara">Bashundhara</option><option value="Baridhara">Baridhara</option><option value="Khilkhet/Nikunjo">Khilkhet/Nikunjo</option>
                 </select>
             </div>
         </div>
         <div class="form-group">
             <label for="Password" class="col-sm-3 control-label">Password</label>
             <div class="col-sm-6">
                 <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
             </div>
         </div>
         <div class="form-group">
             <label for="ConfirmPassword" class="col-sm-3 control-label">Confirm Password</label>
             <div class="col-sm-6">
                 <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password">
             </div>
         </div>



       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary" name="md2">Sign Up</button>
         <?php


         if (isset($_POST['md2'])) {
           //Reg page data
    $uni=$_POST['uni'];
    $fullname = $_POST['CustName'];
    $email = $_POST['CustEmail'];
    $mobile= $_POST['CustMobile'];
    $add = $_POST['CustAddress'];
    $area = $_POST['CustArea'];
    $pass = $_POST['Password'];


  $sql = "SELECT * FROM user where username='$uni'";
    $result = $conn->query($sql);

    if ($result->num_rows <1 )
     {
        // output data of each row
        $stmt =$conn->prepare("insert into user(username,fullname,email,cno,address,area,pass) values (?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$uni,$fullname,$email,$mobile,$add,$area,$pass);
    $stmt->execute();
   
    $stmt ->close();
    $conn->close();

      }
     else
    {
      echo '<script type="text/javascript">alert("Username already taken");</script>';
    }





}




          ?>

       </div>
     </div>
   </div>
 </div>
 </div>
</form>






</body>
</html>
