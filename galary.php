<?php
require_once  "header.php";

 ?>
 <style>
 body{
   background-image: url("img/bg_1.jpg");
   background-repeat: no-repeat;
   background-size:cover;

 }
 .col-md-3{
   padding: 8px;
 }
 .desc {
   background: #ffffff none repeat scroll 0 0;
 }
</style>
<div class="container">
  <div class="rent-button"><button>ORDER FOOD</button></div>
  <div class="login-form" style="margin-top: 70px">
  <div class="main-div">
    <div class="panel">
      <h2>Menu</h2>
    </div>
    <form method="post" action="galary.php">
      <input type="text" name="foodref" class="form-control" placeholder="Food Ref." required="required">
        <br>
    <input type="text" name="foodname" class="form-control" placeholder="Name of Food" required="required">
    <br>
    <input type="text" name="foodprice" class="form-control" placeholder="Price of Food" required="required" >
    <br>
    <input type="hidden" name="status" class="form-control" value="Unconfirm" >
    <br>
      <input type="text"  name="username" class="form-control" placeholder="Usenmane" required="required">
      <br>
      <button type="submit" name="submit" class="btn btn-primary"> Order</button>
    </form>

    <?php


    if(isset($_POST['submit'])){
              echo "<script type=\"text/javascript\">window.alert('you have to Login to order Food.');
        header('location: login.php');</script>";
              }
     ?>
  </div>
  </div>
  </div>
<div class="col-md-3">
  <img src="img/1.jpg" alt="first film" width="100%">
  <div class="desc"> <span> Food Name : Japanise Egg <br>Food Price: N1,200 <br> food ref: bou001</span></div>
</div>
<div class="col-md-3">
  <img src="img/2.jpg" alt="second film" width="100%">
  <div class="desc"> Food Name : Fried Egg <br>Food Price: N2,500 <br> food ref: bou002</div>
</div>
<div class="col-md-3">
  <img src="img/3.jpg" alt="thirs film" width="100%">
  <div class="desc"> Food Name : Potato chips <br>Food Price: N1,730 <br> food ref: bou003</div>
</div>
<div class="col-md-3">
  <img src="img/4.jpg" alt="first film" width="100%">
  <div class="desc"> Food Name : Pepper chicken <br>Food Price: N2,500 <br> food ref: bou004</div>
</div>
<div class="col-md-12"><div class="rent-button"><button>ORDER FOOD</button></div></div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<p></p>
<p></p>
<br>
<div class="col-md-6"></div>
</div>
<p></p>
<script>

$(document).ready(() => {
$('.login-form').hide();
$('.rent-button').on('click', () => {
$('.login-form').show();
});
$('.show-button').on('click', () => {
});
$(".submit-btn").on("click",()=>{
var filmName=$(".filmName").val();
var name=$(".name").val();
var email=$(".email").val();
var status=$(".status")
if(filmName===""){
$(".filmName_error").text("please Enter a valid film name")
}
})
});
</script>
</body>
</html>
</div>
<br>
<?php
require_once "footer.html"
 ?>
