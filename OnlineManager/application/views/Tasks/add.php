<html>

<head>
	<link rel="stylesheet" href="../public/css/menuStyle.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../public/css/addTask.css" />
<!-- 	<link rel="stylesheet" type="text/css" href="../public/css/calendar.css" />
	<link rel="script" type="text/javascript" href="../public/js/datepiker.js" />

 -->	
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../public/js/jquery.tokeninput.js"></script>
     <link rel="stylesheet" href="../public/css/token-input.css" type="text/css" />
    
</head>
	
<body>
	<div id = "topMenu">
			<img src="../public/images/logoImage.png" height="120" width="120" style=""><p> Online Project Manager</p>

		<div id="userContent"><p><span>Logged as</span></p>
			<p><?php echo $_SESSION['user_data']['username']?></p>
		</div>
	</div>

	<div id = "barMenu">
		<ul>
			<a href="../projects/topBarAction/top=0">
				<li><p>Home</p><img src = "../public/images/icons/homeNonSelected.png"></li>
				</a>
			<a href="../projects/topBarAction/top=1">
				<li><p>Projects</p><img src = "../public/images/icons/projectsNonSelected.png"></li>
			</a>
			<a href="../projects/topBarAction/top=2">
				<li><span><p>Tasks</p><img src = "../public/images/icons/tasksSelected.png"></span></li>
			</a>
			<a href="../projects/topBarAction/top=3">
				<li><p>Messages</p><img src = "../public/images/icons/messagesNonSelected.png"></li>
			</a>
			<a href="../projects/topBarAction/top=4">
				<li><p>Files</p><img src = "../public/images/icons/filesNonSelected.png"></li>
			</a>
			<a href="../projects/topBarAction/top=5">
				<li><p>Profile</p><img src = "../public/images/icons/profileNonSelected.png"></li>
			</a>
		</ul>
	</div>
	
	
		<!-- contact form -->
        <section id="container">
		
		<h2>Add new task for (Project name)</h2>
		<div class="wrapper">
		<form name="addtask" id="addtask-form" method="post" action="#">
		<div id="wrapping" class="clearfix">
			<section id="aligned">
			
			<!-- <label for="name">Task name:</label> -->
			<input type="text" name="name" id="name" placeholder="Task name" autocomplete="off" tabindex="1" class="txtinput">


			<input type="text" name="author" id="email" placeholder="Author name" autocomplete="off" tabindex="2" class="txtinput">

			<input type="text" name="date" id="date" placeholder="Enter date" autocomplete="off" tabindex="3" class="txtinput">
		
			<input type="text" name="deadline" id="deadline" placeholder="Enter deadline for this task" tabindex="4" class="txtinput">
		
			<textarea name="description" id="description" placeholder="Enter a description..." tabindex="5" class="txtblock"></textarea>
			</section>
			
			<section id="aside" class="clearfix">
				<section id="recipientcase">
				<h3>Assign users:</h3>
					<!-- <select id="recipient" name="recipient" tabindex="6" class="selmenu">
  						<option value="staff">Site Staff</option>
  						<option value="editor">Editor-in-Chief</option>
  						<option value="technical">Tech Department</option>
  						<option value="pr">Public Relations</option>
  						<option value="support">General Support</option>
					</select> -->
					<div>
				        <input type="text" id="demo-input-local" name="blah" placeholder= "Add...."  /> 
				        <script type="text/javascript">
				        $(document).ready(function() {
				            $("#demo-input-local").tokenInput([
				                {id: 7, name: "Name1"},
				                {id: 11, name: "Name2"},
				                {id: 13, name: "Name3"},
				                {id: 17, name: "Name4"},
				                {id: 19, name: "Name5"},
				                {id: 23, name: "Name6"},
				                {id: 29, name: "Name7"},
				                {id: 31, name: "Name8"},
				                {id: 37, name: "Name9"},
				                {id: 41, name: "Name10"},
				                {id: 43, name: "Name11"},
				                {id: 47, name: "Name12"}
				            ]);
				        });
				        </script>
				    </div>
				</section>
				
				<section id="prioritycase">
					<h3>Priority:</h3>
					<span class="radiobadge">
						<input type="radio" id="low" name="priority" value="low">
						<label for="low">Low</label>
					</span>
				
					<span class="radiobadge">
						<input type="radio" id="med" name="priority" value="med" checked="checked">
						<label for="med">Medium</label>
					</span>
				
					<span class="radiobadge">
						<input type="radio" id="high" name="priority" value="high">
						<label for="high">High</label>
					</span>
				</section>
			</section>
		</div>


		<section id="buttons">
			<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
			<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Add task!">
			<br style="clear:both;">
		</section>
		</form>
		</section>
		
	</div>
	
</body>
</html>