<html>

<head>
	<link rel="stylesheet" href="../public/css/menuStyle.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../public/css/profileStyle.css" />
</head>
	
<body>
	<div id = "topMenu">
		
		<img src="../public/images/logoImage.png" height="120" width="120" style="">
		<p> Online Project Manager</p>

		<div id="userContent">

			<p><span>Logged as</span></p>
			<p><?php echo $_SESSION['user_data']['username']?></p>

		</div>
	</div>

	<div id = "barMenu">
		<ul>
			<a href="projects/topBarAction/top=0">
				<li>
					<p>Home</p>
					<img src = "../public/images/icons/homeNonSelected.png">
				</li>
			</a>

			<a href="projects/topBarAction/top=1">
				<li>
					<span>
					<p>Projects</p>
					<img src = "../public/images/icons/projectsSelected.png">
					</span>
				</li>
			</a>

			<a href="projects/topBarAction/top=2">
				<li>
					<p>Tasks</p>
					<img src = "../public/images/icons/tasksNonSelected.png">
				</li>
			</a>

			<a href="projects/topBarAction/top=3">
				<li>
					<p>Messages</p>
					<img src = "../public/images/icons/messagesNonSelected.png">
				</li>
			</a>

			<a href="projects/topBarAction/top=4">
				<li>
					<p>Files</p>
					<img src = "../public/images/icons/filesNonSelected.png">
				</li>
			</a>

			<a href="projects/topBarAction/top=5">
				<li>
					<p>Profile</p>
					<img src = "../public/images/icons/profileNonSelected.png">
				</li>
			</a>
		</ul>
	</div>
	
	<div id="content">
		<div id="profile">
			<form class="myProfile">
				<label>Name: </label>
				<input type="text" value="Prisacaru Madalina Elena" name="name" id="name"/>
			</form>

			<form class="myProfile">
				<label>Username: </label>
				<input type="text" name="username" value="elena.prisacaru" name="username" id="username"/>
			</form>

			<form class="myProfile">
				<label>Data Nasterii: </label>
				<input type="date" name="dataNasterii" id="dataNasterii"/>
			</form>

			<form class="myProfile">
				<label id="job">Job: </label>
				<input type="radio" name="job" value="admin" class="job" id="idJob"/>Admin
				<input type="radio" name="job" value="developer" class="job" />Developer
			</form>

			<form class="saveSubmit">
				<input type="submit" value="Save" name="saveSubmit" id="save"/>
			</form>
		</div>
</body>
</html>