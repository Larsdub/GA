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
            Register
          </h1>
        </div>
        <!-- Content in deze DIV -->
        <div class="page-content inset">
          <div class="row">

    <form method="post" action="register.php" name="registerform">   
    
    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username">Username (Alleen nummers en letters.)</label>
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
    
    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email">Leerlingnummer</label>    
    <input id="login_input_email" class="login_input" type="text" name="user_email" required />        
    
    <label for="login_input_password_new">Wachtwoord (min. 6 characters)</label>
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />  
    
    <label for="login_input_password_repeat">Herhaal wachtwoord</label>
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />        
    <input class="btn btn-primary" type="submit"  name="register" value="Registreer" />
    
</form>


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