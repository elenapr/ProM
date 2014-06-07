<html>

<head>
	<link rel="stylesheet" href="../public/css/menuStyle.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../public/css/displaytask.css" />
	<link rel="stylesheet" type="text/css" href="../public/css/calendar.css" />
	<link rel="script" type="text/javascript" href="../public/js/datepiker.js" />
	

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

			<div class="deleteButton">
					<li class="trash"><a href="#non">Delete this task</a></li>
					    </div>
	<div id="projectTask">
			<p class="taskp">Project Name - Task#1</p>
		</div>
	<div class="contentTask">
	
			<table class="tg">
			  <tr>
			    <th class="tg-ls8f"><p id= "Label1">Description:</p></th>
			    <td class="tg-ls8f">
			  						 
      			<div contenteditable="true" >This is the task description.This can be more than this and can be multiple lines. </div>
    
						</td>
			  </tr>
			  <tr>
			    <th class="tg-031e"><p id= "Label1">Added by:</p></th>
			    <td class="tg-ls8f"><p id="two" contenteditable="false"> Chirila Vasile Tiberiu</p></td>
			  </tr>
			  <tr>
			  <th class="tg-031e"><p id= "Label1">Priority:</p></th>
			    <td class="tg-ls8f"> <form name="myform">
										    <select name="sort" id="sort"  onChange="javascript:document.myform.submit();">
								    		<option value="name">Hight</option>
								    		<option value="price">Medium</option>
								    		<option value="price">Low</option>
								    		</select>
											</form></td>

			    
			  </tr>
			  <tr>
			    <th class="tg-031e"><p id= "Label1">Date added:</p></th>
			    <td class="tg-ls8f"><p id="four" contenteditable="false">12-12-2013</p></td>
			  </tr>
			  <tr>
			    <th class="tg-031e"><p id= "Label1">Deadline:</p></th>
			    <td class="tg-ls8f"><input type="text" value="DeadLine from the database" name="SelectedDate" id="SelectedDate" readonly onClick="GetDate(this);"></td>
			  </tr>
			  <tr>
			    <th class="tg-031e"><p id= "Label1">State:</p></th>
				    <td class="tg-ls8f">	<form name="myform">
										    <select name="sort" id="sort"  onChange="javascript:document.myform.submit();">
								    		<option value="name">Just started</option>
								    		<option value="price">In progres</option>
								    		<option value="price">Finish</option>
								    		</select>
											</form>
				    </td>
			  </tr>
			  <tr>
			    <th class="tg-031e"><p id= "Label1">User Asigned:</p></th>
			    <td class="tg-ls8f">       
			    				<ol>
									<li><p>Chirila Vasile Tiberiu</p></li>
									<li><p>Prisacaru Elena-Madalina</p></li>
									<li><p>Chelariu Madalina-Georgiana</p></li>
  		                       </ol>
			    			<p id="addU">Add new person to the task</p>
			    				<form name="myform">   <!--  In aceasta lista apar persoanele care nu lucreza deja la proiect -->
										    <select name="sort" id="sort"  onChange="javascript:document.myform.submit();">
								    		<option value="name">IIon Ion</option>
								    		<option value="price">Andrei Andrei</option>
								    		<option value="price">Maria Maria</option>
								    		</select>
								</form>
									<input type = "Submit" name = "Submit1" value = "Add"> 
								</td>
			  </tr>
			</table>

		</div>

</body>
<!-- Plasam java scriptul la final pentru ca sa fie incarcata pagina mai rapid -->
<script type="text/javascript" src="../public/js/datepiker.js"></script>
</html>