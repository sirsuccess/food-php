<!DOCTYPE html>
<html lang="en">
<head>
  <title>FILM RENTAL SERVICES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel ="stylesheet" href="css/styles.css" type="text/css">
  <link rel="stylesheet" href="css/login.css" type="text/css" >


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"> BOOUST FOOD</p></a>
    </div>
    <ul class="nav navbar-nav">

      <li class="active"><a href="index.php">HOME</a></li>
      <li> <div class="dropdown">
    <button class="dropbtn">MENU
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="galary.php">Available Food</a>
    </div>
  </div> </li>
      <li> <div class="dropdown">
    <button class="dropbtn">ORDER
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="order.php">Place Order</a>
      <a href="track_order.php">Track Order</a>
    </div>
  </div> </li>
  <li> <div class="dropdown">
<button class="dropbtn">RATE
  <i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-content">
  <a href="#">Our Service</a>
  <a href="#">Our Food</a>

</div>
</div> </li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>  <div class="dropdown">
    <button class="dropbtn"><span class="glyphicon glyphicon-user"></span> Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="profile.php">View</a>
      <a href="EditProfile.php">Edit</a>
    </div></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</head>
<body>
  <style>
  .dropbtn {
      background-color: #1d1d1e;
      color: white;
      padding: 14px;
      font-size: 14px;
      border: none;
  }

  .dropdown {
      position: relative;
      display: inline-block;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
  }

  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }

  .dropdown-content a:hover {background-color: #ddd;}

  .dropdown:hover .dropdown-content {display: block;}

  .dropdown:hover .dropbtn {background-color: #3e8e41;}
  </style>
</body>
</html>
