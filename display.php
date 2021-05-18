
<?php include('connection.php') ?>
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php include('cdn.php') ?>
  </head>
  <body class="body2">
    <!--Navbar -->
    <?php include('navbar.php') ?>
<!--/.Navbar  -->

<!--/.card  -->
<div class="card cardaccount3" style="width: 22rem;">

  <div class="card-body ">
    <h5 class="card-title" >Your Cart</h5>




    <p class="card-text " id= "cart"><nav class="nav flex-column"></nav></p>



    </div>
    <!--Panel-->
<div class="card card-block add">

    <p class="card-text">Total</p>
    <p id="total">0tk</p>


</div>
          <form  action=" " method="post">
           <button  id="out" type="submit" class="btn btn-info checkout " name="checkout1">GO TO CHECKOUT</button>
           <?php

             if(isset($_POST['checkout1']))
             {

               header("location: checkout.php"); //to redirect back to "index.php" after logging out

             }

            ?>
          </form>
</div>


</div>

<!--/.card  -->
<p class="select"   > </p>
 
    <!-- Collapse buttons -->
<div>
  <a class="btn btn-light-blue collapse2" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Kameez - Salwar & Other Ladies Dress
  </a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample">
  <div class="mt-3">
    <!-- /Body element -->
    <ul class="list-group list-group-flush table1">
  <li class="list-group-item ">Dupatta  <button type="button" name="Dupatta" value="30tk" class="btn btn-outline-info waves-effect cartbtn  click"  >ADD TO CART</button><p class="pricetag">Starts from 30tk</p></li>

  <li  class="list-group-item ">Kameez (Plain)<button type="button" name="Kameez" value="20tk"class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 20tk</p></li>
  <li class="list-group-item ">Salwar<button type="button" name="Salwar" value="50tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 50tk</p></li>
  <li class="list-group-item">Scarf<button type="button" name="Scarf" value="15tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 15tk</p></li>
  <li class="list-group-item">Frock<button type="button" name="Frock" value="100tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 100tk</p></li>
</ul>
  </div>
</div>

<!-- / scr element -->

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 100; //Input fields increment limitation
    var addButton = $('.click'); //Add button selector
    var wrapper = $('.card-body'); //Input field wrapper
    var totalPrice=0;


    var x = 1; //Initial field counter is 1


    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        var id1 = $(this).attr('name');
        var id2 = $(this).attr('value');
        var fieldHTML = '<div id="gap"> <p   class="rmv" >'+id1+' </p><button  type="button"  value="'+id2+'" class="remove_button btn btn-danger yoyo">DEL</button> </div>'; //New input field html




        if(x < maxField){
            x++; //Increment field counter

            $(wrapper).append(fieldHTML); //Add field html


            totalPrice=totalPrice+ parseInt(id2);

             document.getElementById('total').innerHTML=totalPrice +"Tk";
        }
     
    });
    $('#out').click(function() {
      var elements = document.getElementsByClassName('rmv');
      var x= [];

      for (i = 0; i < elements.length ;i++) {
        x.push(elements[i].innerHTML);

       }

     var y=[];
       y.push(document.getElementById('total').innerHTML);
  $.ajax({
    url:"checkout.php",
    method:"post",
    data:{x:JSON.stringify(x),y:JSON.stringify(y),},

    success :function (res)
    {
      console.log(res);
    }


  });
  

        });


    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){

        e.preventDefault();

        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter

        var id2 = $(this).attr('value');

        totalPrice=totalPrice-parseInt(id2);

        document.getElementById('total').innerHTML=totalPrice +"Tk";
    });
});
  </script>


<!-- / Collapsible element -->
<!-- Collapse buttons -->
<div>
<a class="btn btn-light-blue collapse2" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
Saree & Others
</a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample2">
<div class="mt-3">
  <ul class="list-group list-group-flush table1">
  <li class="list-group-item ">Jamdani Saree <button type="button" name="Jamdani Saree " value="30tk" class="btn btn-outline-info waves-effect cartbtn  click"  >ADD TO CART</button><p class="pricetag">Starts from 30tk</p></li>

<li  class="list-group-item ">Silk Saree<button type="button" name="Silk Saree" value="20tk"class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 20tk</p></li>
<li class="list-group-item ">Banarasi Saree<button type="button" name="Banarasi Saree" value="50tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 50tk</p></li>
<li class="list-group-item">Wedding Saree<button type="button" name="Wedding Saree" value="100tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 100tk</p></li>
  </ul>
</div>
</div>
<!-- / Collapsible element -->
<div>
<a class="btn btn-light-blue collapse2" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
Suits
</a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample3">
<div class="mt-3">
  <ul class="list-group list-group-flush table1">
  <li class="list-group-item ">Classic Fit Suit  <button type="button" name="Classic Fit Suit" value="30tk" class="btn btn-outline-info waves-effect cartbtn  click"  >ADD TO CART</button><p class="pricetag">Starts from 30tk</p></li>

<li  class="list-group-item ">Double Breasted Suit<button type="button" name="Double Breasted Suit" value="20tk"class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 20tk</p></li>

  </ul>
</table>
</div>
</div>
<!-- / Collapsible element -->
<div>
<a class="btn btn-light-blue collapse2" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
Coat / Jacket / Blazer (Winter ware)
</a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample4">
<div class="mt-3">
  <ul class="list-group list-group-flush table1">
  <li class="list-group-item ">Coat  <button type="button" name="Coat" value="30tk" class="btn btn-outline-info waves-effect cartbtn  click"  >ADD TO CART</button><p class="pricetag">Starts from 30tk</p></li>

<li  class="list-group-item ">Blazer<button type="button" name="Blazer" value="20tk"class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 20tk</p></li>
<li class="list-group-item ">Jacket<button type="button" name="Jacket" value="50tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 50tk</p></li>
<li class="list-group-item">Koti<button type="button" name="Koti" value="15tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 15tk</p></li>
<li class="list-group-item">Tie<button type="button" name="Tie" value="5tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button><p class="pricetag">Starts from 5tk</p></li>
  </ul>
</table>
</div>
</div>
 
 

<!-- card -->
  
<?php include('footer.php') ?>
<!-- Footer -->
</body>
</html>
