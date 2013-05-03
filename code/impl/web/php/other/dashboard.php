<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/menu-style.css" rel="stylesheet" type="text/css">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
      <!-- HTML5 shim for IE backwards compatibility -->
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
         $('.dropdown-toggle').dropdown();
      </script>
      <title>My Dashboard</title>
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
                     <li><a href="#contact">Sign Out</a></li>
                  </ul>
               </div>
               <!--/.nav-collapse -->
            </div>
         </div>
      </div>
      <div class="container">
         <div class="media ">
            <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64" src="http://s.c.lnkd.licdn.com/scds/common/u/images/themes/katy/ghosts/person/ghost_person_60x60_v1.png">
            </a>
            <div class="media-body span5" style="margin-bottom:20px">
               <h4 class="media-heading"><?php 
                  session_start(); 
                  
                  echo $_SESSION['firstname'] . " ".$_SESSION['lastname']; 
                  
                  ?> </h4>
               Software Engineering 
               <!-- Nested media object -->
               <div class="media">
                  Yousef Shanawany is now connected to Allen Zhang, Sr. Technical Analyst Workday Integrations at LinkedIn and Lina Jobarah, Enrolled Agent.
               </div>
            </div>
         </div>
    <form enctype="multipart/form-data" action="insert.php" method="post" name="changer">
   <input name="MAX_FILE_SIZE" value="102400" type="hidden">
   <input name="image" accept="image/jpeg" type="file">
<input value="Submit" type="submit">

         <legend>My Info</legend>
         <div class="tabbable tabs-left table-striped ">
            <ul class="nav nav-tabs">
               <li class="active"><a href="#lA" data-toggle="tab">Inbox <span class="label label-important">(1)</span></a></li>
               <li><a href="#lB" data-toggle="tab">Profile</a></li>
               <li><a href="#lC" data-toggle="tab">Contacts</a></li>
               <li><a href="#lD" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane active" id="lA">
                  <legend>Messages</legend>
                  <table class="table table-hover">
                     <thead>
                        <tr>
                           <th>Date</th>
                           <th>Mentor</th>
                           <th>Message</th>
                           <th>Reply</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="info">
                           <td>03/09/2013</td>
                           <td>Mark Otto</td>
                           <td>Would you like to have an session this weekend?</td>
                           <td><button class="btn btn-info">Reply</button></td>
                        </tr>
                        <tr>
                           <td>03/07/2013</td>
                           <td>Jacob Thornton</td>
                           <td>How is your project coming along?</td>
                           <td><button class="btn">Chat</button></td>
                        </tr>
                        <tr>
                           <td>03/09/2013</td>
                           <td>Larry Bird</td>
                           <td>Thanks for the Jamba Juice! Don't know what it's for but thanks!</td>
                           <td><button class="btn">Chat</button></td>
                        </tr>
                        <tr>
                           <td>03/05/2013</td>
                           <td>Marry White</td>
                           <td>I think I found the solution to the problem. It has a syntax error at line 151 when calling the function method. Perhaps we can talk with Jogn Connor about the droids in the future.</td>
                           <td><button class="btn">Chat</button></td>
                        </tr>
                        <tr>
                           <td>02/16/2013</td>
                           <td>Thomas Ederson</td>
                           <td>Did you give my Jamba Juice to someone? I can't seem to find mine.</td>
                           <td><button class="btn">Chat</button></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane" id="lB">
                  <legend>Profile <button class="btn">Edit</button></legend>
                  <form class="form-horizontal">
                     <div class="control-group">
                        <label class="control-label" for="inputWarning">Full Name</label>
                        <div class="controls">
                           <input type="text" readonly value="Yousef Shanawany">
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label" for="inputError">Birthday</label>
                        <div class="controls">
                           <input type="text"  readonly value="January 1, 1980">
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label" for="inputInfo">Education Experience</label>
                        <div class="controls">
                           <input type="text" id="inputInfo" readonly value="Software Engineer @ SJSU">
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label" for="inputSuccess">Career Duration</label>
                        <div class="controls">
                           <input type="text" id="inputSuccess" readonly value="4 years">
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label" for="inputSuccess">Service Goal</label>
                        <div class="controls">
                           <input type="text" id="inputSuccess" readonly value="">
                        </div>
                     </div>
                  </form>
               </div>
               <div class="tab-pane" id="lC">
                  <legend>Contacts</legend>
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Subject</th>
                           <th>Contact</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>Mark Otto</td>
                           <td>C Programming</td>
                           <td>
                              <div class="btn-group">
                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                 Contact
                                 <span class="caret"></span>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li><a href="#">Chat</a></li>
                                    <li><a href="#">Email</a></li>
                                    <li><a href="#">Appointment</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>Larry Bird</td>
                           <td>Calculus</td>
                           <td>
                              <div class="btn-group">
                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                 Contact
                                 <span class="caret"></span>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li><a href="#">Chat</a></li>
                                    <li><a href="#">Email</a></li>
                                    <li><a href="#">Appointment</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>Mary White</td>
                           <td>Biology</td>
                           <td>
                              <div class="btn-group">
                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                 Contact
                                 <span class="caret"></span>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li><a href="#">Chat</a></li>
                                    <li><a href="#">Email</a></li>
                                    <li><a href="#">Appointment</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane" id="lD">
                  <legend>Settings</legend>
                  <form class="form-horizontal">
                     <div class="control-group">
                        <label class="control-label" for="inputWarning">Email</label>
                        <div class="controls">
                           <div class="input-append">
                              <input disabled class="span2" id="appendedInputButton" type="text" value="example123@site.com">
                              <button class="btn" type="button">Edit</button>
                           </div>
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label" for="inputError">Password</label>
                        <div class="controls">
                           <div class="input-append">
                              <input disabled class="span2" id="appendedInputButton" type="password" value="passwordpassword">
                              <button class="btn" type="button">Edit</button>
                           </div>
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label" for="inputInfo">Memborship</label>
                        <div class="controls">
                           <div class="input-append">
                              <input disabled class="span2" id="appendedInputButton" type="text" value="Free">
                              <button class="btn btn-success" type="button">Upgrade</button>
                           </div>
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label" for="inputSuccess">Account Status</label>
                        <div class="controls">
                           <div class="input-append">
                              <input disabled class="span2" id="appendedInputButton" type="text" value="Expiring soon">
                              <button class="btn btn-danger" type="button">Delete account</button>
                           </div>
                        </div>
                        <div class="form-actions">
                           <button type="submit" class="btn btn-primary">Save changes</button>
                           <button type="button" class="btn">Cancel</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="navbar">
              <div class="navbar-inner navbar-fixed-bottom">
                <ul class="nav pull-right">
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           Mark Otto
                           <span class="label label-info">(1)</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                           
                           <div class="chatbox">
                              <h5 class="text-info">Mark Otto</h5>
                              <hr /> 
                              <div class="chat">
                                 <p>Hello Yousef!</p>
                                 <p>Hey Mark! Hows are things?</p>
                                 <p>Things are great! I loved the project for 133. It's super awesome</p>
                                 <hr />
                              </div>
                                 <textarea></textarea>
                           </div>
                        </ul>
                  </li>
                </ul>
              </div>
            </div>
      </div>
   </body>
</html>