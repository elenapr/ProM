<html>

<head>
	<link rel="stylesheet" href="public/css/loginStyle.css" type="text/css">
</head>

<body>

	<div id = "loginForm">

		<div id = "loginImage">

		</div>

		<div id = "loginText">
			Prom Project
		</div>

		<form action="login" method="POST">

			<div id = "loginField">
				<img src="public/images/userIcon.png" height="30" width="30" style="vertical-align: middle; margin-bottom:8px;">
				<input type="text" class="textField" size="40" name = "username" id = "username" onfocus="if(this.value == 'username') this.value = '';" value="username"> 
			</div>

			<div id = "loginField" style="margin-top:2px;">
				<img src="public/images/passwordIcon.png" height="30" width="24" style="vertical-align: middle; margin-bottom:8px;">
				<input type="text" class="textField" size="40" name = "password" id = "password" onfocus="if(this.value == 'password') this.value = '';" value="password"> 
			</div>

			<div id= "loginContent">
				<img src="public/images/loginButton.png" width="50" height="50" style="float:right;">
			</form>

		<input type = "Submit" name = "Submit1" value = "Login" class="submitButton">

		</div>

	</div>
	
</body>

</html>