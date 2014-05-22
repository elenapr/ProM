<html>

<head>
	<link rel="stylesheet" href="public/css/menuStyle.css" type="text/css">
</head>
	
<body>
	<div id = "topMenu">
		<img src="public/images/logoImage.png" height="120" width="120" style="vertical-align: middle; margin-top:11px;margin-left:11px;float:left;">
		<p class="logoText"> Online Project Manager</p>

		<div id="userContent">
			<p class="loggedText">Logged as</p>
			<?php
				echo $caca;
			?>
			<p class="usernameText"><?php echo $_SESSION['user_data']['username']?></p>
		</div>
	</div>


</body>


</html>