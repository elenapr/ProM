<html>

<head>
	<link rel="stylesheet" href="../public/css/menuStyle.css" type="text/css">
	<link rel="stylesheet" href="../public/css/addNewProject.css" type="text/css"/>
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
		<div id="menu">
			<ul>
				<li><a href="projects/addProjects">Create new project</a></li>
				<li><a href="myProjects.php">My projects</a></li>
				<li><a href="finishedProjects.php">Finished projects</a></li>
			</ul>
		</div>

		<div class="projectName">
			<label>Name:</label>
			<input type="text" name="projectName" class="text">
		</div>

		<div class="addUser">
			<form>
			<label>Users/Add New User: </label>
			<select>
				<option>Chelariu Madalina Georgiana</option>
				<option>Chirila Vasile Tiberiu</option>
				<option>Prisacaru Madalina Elena</option>
			</select>
			<form>
		</div>

		<div class="users">
			<ol>
				<li id="user">
					<p>Chirila Vasile Tiberiu</p>
					<a id="remove" href="">Remove</a>
				</li>
				<li id="user">
					<p>Chirila Vasile Tiberiu</p>
					<a id="remove" href="">Remove</a>
				</li>
				<li id="user">
					<p>Chirila Vasile Tiberiu</p>
					<a id="remove" href="">Remove</a>
				</li>
			</ol>
		</div>

		<div class="saveSubmit">
			<input type="Submit" value="SAVE" name="saveSubmit" id="save">
		</div>
	</div>
</body>
</html>