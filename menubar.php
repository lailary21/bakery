
<!DOCTYPE html>


<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body id="bg">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-facetime-video"></span> IST Video Streaming</a>
    </div>
      <?php if(isset($_SESSION["user_id"])){ ?>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <?php if($_SESSION["role"] == "admin"){ ?>
        
        <li><a href="manage-video.php"><span class="glyphicon glyphicon-stats"></span> Graph</a></li>
        <li><a href="manage-user.php"><span class="glyphicon glyphicon-wrench"></span> Manage Users</a></li>
        <?php } ?>
        <li><a href="edit-data.php"> <span class="glyphicon glyphicon-edit"></span> Edit data</a></li>
        <li><a href="channel-user.php"><span class="glyphicon glyphicon-blackboard"></span> Channel</a></li>
        <li><a href="upload-video.php"><span class="glyphicon glyphicon-upload"></span> Upload Video</a></li>
      </ul>
        
      <ul class="nav navbar-nav navbar-right">
          <li><a href="register-user.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
          <li><a href="do-logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
      
      
    </div>
      <?php ?>
      <?php }else{?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register-user.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
  </div>
      <?php } ?>
</nav>
    
<!--<div class="container">
  <h3></h3>
  <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
</div>-->

</body>
</html> 

