<html>

<head>
	<link rel="stylesheet" href="../public/css/menuStyle.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../public/css/displaytask.css" />	

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

	<div class="container">
					
				
	<div id="projectTask">
			<p class="taskp">Project Name - Task#1</p>
			<div class="con">
			<a href="#"><p class="back">Back to tasks </p></a>
			<a href="#"><p class="delete">Delete this task</p></a> </div>
	</div>


	<div class="contentTask">
	
			<table class="tg">
			  <tr>
			    <th class="tg-ls8f"><p id= "Label1">Description:</p></th>
			    <td class="tg-ls8f">
			  						 
      			<div contenteditable="false" >This is the task description.This can be more than this and can be multiple lines. </div>
    
			</td>
			  </tr>
			  <tr>
			    <th class="tg-031e"><p id= "Label1">Added by:</p></th>
			    <td class="tg-ls8f"><p id="two" contenteditable="false"> Chirila Vasile Tiberiu</p></td>
			  </tr>
			  <tr>
			  <th class="tg-031e"><p id= "Label1">Priority:</p></th>
			    <td class="tg-ls8f">
			    	<p id="two" contenteditable="false"> Hight</p>
			    </td>

			    
			  </tr>
			  <tr>
			    <th class="tg-031e"><p id= "Label1">Date added:</p></th>
			    <td class="tg-ls8f"><p id="four" contenteditable="false">12-12-2013</p></td>
			  </tr>
			  <tr>
			    <th class="tg-031e"><p id= "Label1">Deadline:</p></th>
			    <td class="tg-ls8f"><p id="four" contenteditable="false">12-12-2013</p></td>
			  </tr>
			  <tr>
			    <th class="tg-031e"><p id= "Label1">State:</p></th>
				    <td class="tg-ls8f">	<p id="four" contenteditable="false">In progress</p></td>
			  </tr>
			  <tr>
			    <th class="tg-031e"><p id= "Label1">User Asigned:</p></th>
			    <td class="tg-ls8f">       
			    				<ol>
									<li><p>Chirila Vasile Tiberiu</p></li>
									<li><p>Prisacaru Elena-Madalina</p></li>
									<li><p>Chelariu Madalina-Georgiana</p></li>
  		                       </ol>
			    			
								</td>
			  </tr>
			</table>

		</div>
		</div>

</body>

</html>