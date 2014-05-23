<html>

<head>
	<link rel="stylesheet" href="public/css/loginStyle.css" type="text/css">
</head>

<body>

	<div id = "loginForm">

		<div id = "logoContent">
			<img src = "public/images/logoImage.png">
			<p>Online Manager Project</p>
		</div>
	
		<form action="login" method="POST">

			<div class = "formContent">
				<img src = "public/images/userIcon.png">
				<input type="text" name = "username" id = "username" onfocus="if(this.value == 'username') this.value = '';" value="username"> 
			</div>

			<div class = "formContent">
				<img src = "public/images/passwordIcon.png">
				<input type="text" name = "password" id = "password" onfocus="if(this.value == 'password') this.value = '';" value="password"> 
			</div>

			<div class = "loginSubmit">
				<input type = "Submit" name = "Submit1" value = "Login">		
			</div>
	</div>
	
</body>

</html>