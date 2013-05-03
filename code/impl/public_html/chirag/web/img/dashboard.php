<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
<?php include 'topline.php'; 
session_start()?>
   <!-- <?php include_once 'session.php'; ?>-->
	  <!-- HTML5 shim for IE backwards compatibility -->
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      
     <title>My Dashboard</title>
   </head>
   <body>
      <div class="container">
         <div class="media ">
            <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64" src="http://s.c.lnkd.licdn.com/scds/common/u/images/themes/katy/ghosts/person/ghost_person_60x60_v1.png">
            </a>
            <div class="media-body span5" style="margin-bottom:20px">
               <h4 class="media-heading"><?php echo "$_SESSION[fullname]";
			   ?> </h4>
               <?php echo "$_SESSION[experience]";?> 
               <!-- Nested media object -->
               <div class="media">
                  *THIS HAS TO GO OFF *** Yousef Shanawany is now connected to Allen Zhang, Sr. Technical Analyst Workday Integrations at LinkedIn and Lina Jobarah, Enrolled Agent.*
               </div>
            </div>
         </div>
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
                           <input type="text" disabled value="<?php echo "$_SESSION[fullname]"; ?>">
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label" for="inputError">Birthday</label>
                        <div class="controls">
                           <input type="text"  disabled value="<?php echo "$_SESSION[dob]"; ?>">
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label" for="inputInfo">Education Experience</label>
                        <div class="controls">
                           <input type="text" id="inputInfo" disabled value="<?php echo "$_SESSION[experience]"; ?>">
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label" for="inputSuccess">Career Duration</label>
                        <div class="controls">
                           <input type="text" id="inputSuccess" disabled value="">
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
                              <input  id="appendedInputButton" type="text" value="example123@site.com">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">'.
                           
                           <span class="label label-info">(1)</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu cht" role="menu" aria-labelledby="dropdownMenu">
                           
                           <div class="chatbox">
                              <h5 class="text-info">Mark Otto</h5>
                              <hr /> 
                              <div class="chat chat1">
                                 <p>Hello Yousef!</p>
                                 <p>Hey Mark! Hows are things?</p>
                                 <p>Things are great! I loved the project for 133. It's super awesome</p>
                              </div>
                                 <hr />
                                 <form name="<?php echo $_SESSION['this_mentor']->get_mentor_id();?>" action="chat_log.php" method="post">
                                    <textarea name="<?php echo $_SESSION['this_mentor']->get_mentor_id();?>" class="textarea-chat chat1"></textarea>
                                 </form>
                           </div>
                        </ul>
                  </li>
                  
                </ul>
              </div>
            </div>
            <script type="text/javascript">
    $('.dropdown-menu').click(function(e) {
        e.stopPropagation();
    });
</script>
      </div>
   </body>
</html>