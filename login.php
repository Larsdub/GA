<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <meta name="description" content="Groenapps">
    <meta name="author" content="Lars van Houwelingen">
    <link rel="apple-touch-icon" href="lj.png">
    <link rel="apple-touch-icon" sizes="72x72" href="lj.png">
    <link rel="apple-touch-icon" sizes="114x114" href="lj.png">

 
    <link rel="stylesheet" href="add2home.css">
    <script type="application/javascript" src="add2home.js" charset="utf-8"></script>



    <title>Groenapps</title>

    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/flat-ui.css">
    

  </head>

  <body>
  
    <div id="wrapper">
      
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li class="sidebar-brand"><a href="#">Groenapps</a></li>
          <li><a href="index.htm">Home</a></li>
          <li><a href="PTA.htm">PTA's</a></li>
          <li><a href="tentamen.htm">Tentamenrooster</a></li>
           <a href="#fakelink" class="btn btn-small btn-social-twitter">
            <i class="fui-twitter"></i>
            Connect with Twitter
          </a>
      </ul>
      </div>
          
      <!-- Content -->
      <div id="page-content-wrapper">
        <div class="content-header">
          <h1>
            <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i></a>
            Login
          </h1>
        </div>
        <!-- Content in deze DIV -->
        <div class="page-content inset">
          <div class="row">

<form method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <input class="btn btn-primary" type="submit"  name="login" value="Log in" />

</form>
  
    <a href="registreer.php">Registreer nieuw account.</a>

      </div>
      
    </div>
	
    <!-- Bootstrap core JavaScript -->
    <!-- Geplaatst op het einde zodat die sneller laad. -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Dit is custom JS zetten om het netjes te houden. -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
  </body>
</html>