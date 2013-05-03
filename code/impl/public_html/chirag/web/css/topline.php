  <?php
  
  ?>
  
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/menu-style.css" rel="stylesheet" type="text/css">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/script.js"></script>
      <script>
         $('.dropdown-toggle').dropdown();
      </script>
	  </head>
	  <body>
	     <div class="navbar navbar-inverse navbar-fixed-top" style="position: inherit; margin-bottom: 20px">
         <div class="navbar-inner">
            <div class="container">
               <button type="button" class="btn btn-navbar " data-toggle="collapse" data-target=".nav-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="brand" href="#">Mentor Web</a>
               <div class="nav-collapse collapse">
                  <ul class="nav">
                     <li class="active"><a href="default.html">Home</a></li>
                     <li><a href="about.html">About</a></li>
                     <li><a href="#contact">Contact</a></li>
                     <li><a href="#contact">FAQ</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Action</a></li>
                           <li><a href="#">Another action</a></li>
                           <li><a href="#">Something else here</a></li>
                           <li class="divider"></li>
                           <li class="nav-header">Nav header</li>
                           <li><a href="#">Separated link</a></li>
                           <li><a href="#">One more separated link</a></li>
                        </ul>
                     </li>
                  </ul>
                  <ul class="nav pull-right">
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-important">(1)</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="#">(1) Message From <strong>Jeffery Aronhalt</strong></a></li>
                           <li><a href="#">Event Invitation: <strong>Java Webinar</strong></a></li>
                           <li class="divider"></li>
                           <li><a href="#">Upgrade Account</a></li>
                           <li><a href="#">Separated link</a></li>
                           <li><a href="#">One more separated link</a></li>
                        </ul>
                     <li><a href="signout.php">Sign Out</a></li>
                  </ul>
               </div>
               <!--/.nav-collapse -->
            </div>
         </div>
      </div>
</body>
	  </html>