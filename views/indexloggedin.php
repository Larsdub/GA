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
          <li class="sidebar-brand"><a href="#">Hey, <?php echo $_SESSION['user_name']; ?>!</a></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="PTA.htm">PTA's</a></li>
          <li><a href="tentamen.htm">Tentamenrooster</a></li>
          <hr>
          <li><a href="#">LLNummer: <?php echo $_SESSION['user_email']; ?></li>
          <br>
          <a href="http://m.twitter.com/larspls" class="btn btn-small btn-social-twitter">
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
            Home
            <a class="btn btn-small btn-primary" href="index.php?logout">Logout</a>
          </h1>
        </div>
        <!-- Content in deze DIV -->
        <div class="page-content inset">
          <div class="row">
            <center>
              <div><img src="img/Watches.png" alt=""></div>
              <p class="well">Altijd op tijd in het goede lokaal, nooit meer niet weten waar je zit. (Tenzij je Groenapps niet checkt.)
              </p>
              <div><img src="img/Mortarboard.png" alt=""></div>
              <p class="well">Help elkaar door vragen te stellen en te beantwoorden zodat iedereen makkelijk hogere cijfers haalt.
              </p>
              <div><img src="img/Clipboard.png" alt=""></div>
              <p class="well">Houd makkelijk je taken bij, zoals je huiswerk en andere opdrachten. Makkelijk en overzichtelijk te zien.
              </p>
            </center>
          </div>
        </div>
        <!-- footer -->
        <div class="span2">
              <ul class="bottom-icons">
                <div class="demo-col">
                <li><a href="http://facebook.com/larsjeremy" class="fui-facebook"></a></li>
                <li><a href="http://twitter.com/larspls" class="fui-twitter"></a></li>
              </ul>
            </div>
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