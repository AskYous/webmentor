<?php 

//include_once 'db.php'; 

?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5b1.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js"></script>  
	
	<head>
	
	<title>LinkedIn Stuff</title>
	
<!-- 	this script authenticates our site -->
	<script type="text/javascript" src="https://platform.linkedin.com/in.js">
		api_key: jlxm5vns9xnq
		onLoad: onLinkedInLoad
		authorize: true			
		scope: 	
				r_emailaddress
				r_contactinfo
				rw_nus 
				r_network
	</script>

	<script type="text/javascript">
	
	// 2. Runs when the JavaScript framework is loaded above
	function onLinkedInLoad() {
    IN.Event.on(IN, "auth", onLinkedInAuth);
  	}

	// 2. Runs when the viewer has authenticated
	function onLinkedInAuth() {
	 IN.API.Profile("me")
     .result(displayProfiles);
     
    IN.API.Connections("me")
      .fields("firstName", "lastName", "industry")
      .result(displayConnections)
      .error(displayConnectionErrors);
	}
	
	function displayConnectionErrors() {}

	// 2. Runs when the Connections() API call returns successfully
	function displayConnections(connections) {
    var connectionsDiv = document.getElementById("connections");
    
    var members = connections.values; // The list of members you are connected to
    	for (var member in members) {
      	connectionsDiv.innerHTML += "<p>" + members[member].firstName + " " + members[member].lastName
                           + " works in the " + members[member].industry + " industry";
    	}     
  	}

  	function displayConnectionsErrors(error) { /* do nothing */ }


  	// 2. Runs when the Profile() API call returns successfully
  	function displayProfiles(profiles) {
    	member = profiles.values[0];
    	document.getElementById("profiles").innerHTML += 
      	"<p id=\"" + member.id + "\">Hello, "+ member.firstName + " " + member.lastName + "</p>"
      	+ "<p> LinkedIn Member ID: " + member.id + "</p>"
       	+ "<p> LinkedIn Headline: " + member.headline + "</p>"
       	+ "<p> LinkedIn Industry: " + member.industry + "</p>"
       	+ "<p> LinkedIn Picture URL: " + member.pictureUrl + "</p>"
       	+ "<p> LinkedIn Connections: " + member.Connections + "</p>";
		}
  
	</script>
	</head>
	<body>
<!-- 	filled in by function displayProfiles() -->
	<div id="profiles"><script type="IN/login">
	</script><br/></div>	
	
	<div id="connections"></div>
	<div id="profile">Cool Plugin<br/></div>
		

	
	
	
<!--  This is allowed if you let the site view your information with this plugin  -->
	<script 
		type="IN/MemberProfile" 
		data-id="http://www.linkedin.com/pub/~/66/448/a9" 
		data-format="inline" 
		data-related="false">
	</script>

<!-- IN.Event.on(...) logs the user out of LinkedIN and should be called when
	they log out of mentorweb -->
	<script>
	IN.Event.on(IN, "logout", function() {onLinkedInLogout();});

	function onLinkedInLogout(){
		window.location.href='linkedin.php';
	}
	</script>
	<p><a href="#" onclick="IN.User.logout()">logout</a></p>






</html> 