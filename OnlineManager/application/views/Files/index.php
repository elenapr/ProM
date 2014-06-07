<html>

<head>
	<link rel="stylesheet" href="public/css/menuStyle.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="public/css/file.css" />
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
					<p>Home</p>
					<img src = "public/images/icons/homeNonSelected.png">
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
					<span>
					<p>Files</p>
					<img src = "public/images/icons/filesSelected.png">
					</span>
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
	<div class="container">
			<h2>Add file for (Project name)</h2>
	<form action="test.php" method="post" enctype="multipart/form-data">
  		<div class="customfile-container">
    	<label>File: </label>
    	<input type="file" id="file" name="myfiles[]" multiple />
  		</div>
			<a href="#" class="myButton">Submit</a>
		
	</form>
	<div class="files">
			<div id="doc">
			
			<div class="block">
			<img src="public/images/pdf.jpg" alt="pdf" width="80" height="80" align="middle" >
			
			<a href="#" target="_blank">
			<lable>Document name</lable>
			</a>
			<button type="submit">Delete</button>
			</div>
			</div>


			<div id="doc">
			
			<div class="block">
			<img src="public/images/pdf.jpg" alt="pdf" width="80" height="80" align="middle" >
			
			<a href="#" target="_blank">
			<lable>Document name</lable>
			</a>
			<button type="submit">Delete</button>
			</div>
			</div>

<div id="doc">
			
			<div class="block">
			<img src="public/images/pdf.jpg" alt="pdf" width="80" height="80" align="middle" >
			
			<a href="#" target="_blank">
			<lable>Document name</lable>
			</a>
			<button type="submit">Delete</button>
			</div>
			</div>
			<div id="doc">
			
			<div class="block">
			<img src="public/images/pdf.jpg" alt="pdf" width="80" height="80" align="middle" >
			
			<a href="#" target="_blank">
			<lable>Document name</lable>
			</a>
			<button type="submit">Delete</button>
			</div>
			</div>

			<div id="doc">
			
			<div class="block">
			<img src="public/images/pdf.jpg" alt="pdf" width="80" height="80" align="middle" >
			
			<a href="#" target="_blank">
			<lable>Document name</lable>
			</a>
			<button type="submit">Delete</button>
			</div>
			</div>

			<div id="doc">
			
			<div class="block">
			<img src="public/images/pdf.jpg" alt="pdf" width="80" height="80" align="middle" >
			
			<a href="#" target="_blank">
			<lable>Document name</lable>
			</a>
			<button type="submit">Delete</button>
			</div>
			</div>

			<div id="doc">
			
			<div class="block">
			<img src="public/images/pdf.jpg" alt="pdf" width="80" height="80" align="middle" >
			
			<a href="#" target="_blank">
			<lable>Document name</lable>
			</a>
			<button type="submit">Delete</button>
			</div>
			</div>

			<div id="doc">
			
			<div class="block">
			<img src="public/images/pdf.jpg" alt="pdf" width="80" height="80" align="middle" >
			
			<a href="#" target="_blank">
			<lable>Document name</lable>
			</a>
			<button type="submit">Delete</button>
			</div>
			</div>
	</div>
</div>
</body>

</html>