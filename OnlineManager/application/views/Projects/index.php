<html>

<head>
	<link rel="stylesheet" href="public/css/menuStyle.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="public/css/projectsMainView.css" />
</head>
	
<body>
	<div id = "topMenu">
		
		<img src="public/images/logoImage.png" height="120" width="120" style="">
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
					<span>
						<p>Home</p>
						<img src = "public/images/icons/homeSelected.png">
					</span>
				</li>
			</a>

			<a href="projects/topBarAction/top=1">
				<li>
					<p>Projects</p>
					<img src = "public/images/icons/projectsNonSelected.png">
				</li>
			</a>

			<a href="projects/topBarAction/top=2">
				<li>
					<p>Tasks</p>
					<img src = "public/images/icons/tasksNonSelected.png">
				</li>
			</a>

			<a href="projects/topBarAction/top=3">
				<li>
					<p>Messages</p>
					<img src = "public/images/icons/messagesNonSelected.png">
				</li>
			</a>

			<a href="projects/topBarAction/top=4">
				<li>
					<p>Files</p>
					<img src = "public/images/icons/filesNonSelected.png">
				</li>
			</a>

			<a href="projects/topBarAction/top=5">
				<li>
					<p>Profile</p>
					<img src = "public/images/icons/profileNonSelected.png">
				</li>
			</a>
		</ul>
	</div>
	
	<div id="menu">
			<ul>
				<li><a href="NewProject.html">Create new project</a></li>
				<li><a href="MyProjects.html">My projects</a></li>
				<li><a href="FinishedProjects.html">Finished projects</a></li>
			</ul>
		</div>

		<div class="projectsMainView">
			<ol id="projects">
				<li>
					<p class="projectName">Online Project Manager</p>
					<p class="daysRemains"> - 154 days remains</p>
					<p class="addedBy">Added By: Ionescu Mihai</p>
					<p class="dateAdded">Date added: 22-05-2014</p>
				</li>
				<li>
					<p class="projectName">Online Project Manager</p>
					<p class="daysRemains"> - 154 days remains</p>
					<p class="addedBy">Added By: Ionescu Mihai</p>
					<p class="dateAdded">Date added: 22-05-2014</p>
				</li>
			</ol>

</body>


</html>