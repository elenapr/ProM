<html>
<head>
	<link rel="stylesheet" href="../public/css/menuStyle.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../public/css/addNewSubject.css" />
	<script type="text/javascript">
		function Expand(divId)
		{
			// var divObject = document.getElementById(divId);
			// divObject.className = "replyMessageVisible";

			 var o = document.getElementById(divId);
			 o.childNodes[5].className = "replyMessageVisible";
		}

		function Collapse(id) {
			var object = document.getElementById(id);
			object.className = "replyMessageHidden";
		}

		function NotEditable(id) {
			var object = document.getElementById(id);
			object.setAttribute('readonly');
		}
	</script>
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
					<p>Projects</p>
					<img src = "../public/images/icons/projectsNonSelected.png">
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
					<span>
					<p>Messages</p>
					<img src = "../public/images/icons/messagesSelected.png">
					</span>
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
					<li><a href="../messages">Back to messages</a></li>
				</ul>
		</div>

		<div class="subject">
			<label>Subject:</label>
			<input type="text" name="subject" class="text">
		</div>

		<div class="description">
			<label>Description: </label>
			<input type="text" name="subject" class="text">
		</div>

		<div class="addMessage">
			<input type="submit" name="saveSubmit" id="save" value="Add message"/>
		</div>
	</div>
</body>
</html>