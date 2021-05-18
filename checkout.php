
<?php include('connection.php') ?>
<?php
session_start();

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" href="index.css">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
     <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Navbar -->
    <?php include('navbar.php') ?>
  <!--/.Navbar  -->
  
  <?php
       
       if(isset($_POST['x'])){ //check if $_POST['examplePHP'] exists
   
                   $_SESSION["cart"]=json_decode($_POST['x']);
                   $_SESSION["total"]=json_decode($_POST['y']);
           }
   
           
   
   
   
        ?>

  <form action="" method="post" >

    
 
     <!-- card1 -->
     <div class="card items" style="width: 28%;margin-top:35px;  display:inline-block ;margin-left:20%">
     <p></p>
     <p></p>
     <p></p>

     <div class="card-body">
     <h5 class="card-title" >Selected Items</h5>
     <p class="card-text " id= "cart"><nav class="nav flex-column">

       <div class="form-group">
       <?php




foreach ($_SESSION["cart"] as $value) {
  echo '<h4>'.'•'.$value;
}




 ?>
 

              
       </div>
      </select>
      <p></p>
       <h3>Total :<span style="color:red"> <?php  foreach ($_SESSION["total"] as $value) {echo $value;}  ?></span></h3>
      <p></p>
      <p></p>



     </nav></p>

     </div>
     </div>
     <!-- card1 -->
         <!-- card1 -->
         <div class="card payment" style="width: 30%; margin-top:35px;  display:inline-block; float:right ;margin-right:20%">
     <p></p>
     <p></p>
     <p></p>

     <div class="card-body">
     <h5 class="card-title" >Payment Method</h5>
     <p class="card-text " id= "cart"><nav class="nav flex-column">

       <div class="form-group">
        
               <div class = "radio">
                  <label>
                     <input type = "radio" name = "optionsRadios" id = "optionsRadios1" value = "Cash On Delivery"  > 
                     Cash On Delivery
                  </label>
               </div>
               <div class = "radio">
                  <label>
                     <input type = "radio" name = "optionsRadios" id = "optionsRadios2" value = "Online Payment ">
                        Online Payment 
                  </label>
               </div>
              
       </div>
      </select>
      <p></p>
       
     



     </nav></p>

     </div>
     </div>
     <!-- card1 -->
          <!-- card2 -->
     <div class="card dateandtime" style="width: 60%;">
       <p></p>
       <p></p>
       <p></p>

       <div class="card-body ">
         <h5 class="card-title" >Select your date and time slot below</h5>
         <p class="card-text " id= "cart"><nav class="nav flex-column">

           <input id="datepicker" name="date"width="45%" />
           <select id="timeslot" name="timeslot"style="width:45%; " class="browser-default custom-select timing" >
             <option selected>Time Slot</option>
             <option value="9AM-1PM">9AM-1PM</option>
             <option value="1PM-6PM">1PM-6PM</option>
             <option value="6PM-10PM">6PM-10PM</option>
           </select>
           <p></p>
           <p></p>
           <p></p>



     </nav></p>

       </div>
     </div>
<!-- card2 -->
<!-- card3 -->
<div class="card Additionalcomment" style="width: 60%;">
<p></p>
<p></p>
<p></p>

<div class="card-body">
<h5 class="card-title" >Additional Comment</h5>
<p class="card-text " id= "cart"><nav class="nav flex-column">

  <div class="form-group">

    <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" name="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
 </select>
 <p></p>
 <p></p>
 <p></p>



</nav></p>

</div>

</div>


<!-- card3 -->
 
<button type="submit" class="btn btn-danger" id="order" name="order" style="float:right;margin-right:20%;margin-top:30px">Order Now</button>

    <script>
         
         $('#order').click(function(){
          swal("Your Order has been placed", " ", "success");
        });

        $('#datepicker').datepicker({

        });
        $('.yo').click(function(){
            console.log(document.getElementById('datepicker').value);
        });


    </script>


<?php

 

  if (isset($_POST['order'])){
$string='';
 foreach ($_SESSION["cart"] as $value) {
  $string=$string.'•'.$value;
  
};
 
  echo $totaltk='';
  foreach ($_SESSION["total"] as $value) {
    $totaltk= $value;
    
  }
 
 
$comment= $_POST['exampleFormControlTextarea1'];
$timeslot= $_POST['timeslot'];
$date= $_POST['date'];
$payment= $_POST['optionsRadios'];
$user=$_SESSION["log"];
$stmt =$conn->prepare("insert into orderdetails(username,paymentmethod,total,date,timeslot,items,addcomment) values (?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$user,$payment,$totaltk,$date,$timeslot,$string,$comment);
    $stmt->execute();
    echo '<script type="text/javascript">swal("Order Placed", "", "success");</script>';
    $stmt ->close();
    $conn->close();

}
 

?>

</form>
<?php include('footer.php') ?>

  </body>
</html>
