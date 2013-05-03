<?php include_once "header.php" ?>
</head>
<html>
<body>
<script type="in/Login">
	Hello, <?js= firstName ?> <?js= lastName ?>.
</script>

<p id="lin"></p>

<script type="text/javascript">
  // 2. Runs when the JavaScript framework is loaded
  function onLinkedInLoad() {
    IN.Event.on(IN, "auth", onLinkedInAuth);
  }

  // 2. Runs when the viewer has authenticated
  function onLinkedInAuth() {
    IN.API.Profile("me").result(displayProfiles);
  }

  // 2. Runs when the Profile() API call returns successfully
  function displayProfiles(profiles) {
    member = profiles.values[0];
    document.getElementById("lin").innerHTML = 
      "<p id=\"" + member.id + "\">Hello, " +  member.firstName + " " + member.lastName + "</p>" + "<p> your id is " + member.id + "</p>";
  }		
</script>

</body>
</html>