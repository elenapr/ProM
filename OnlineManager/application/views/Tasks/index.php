<html>

<head>
	<link rel="stylesheet" href="public/css/menuStyle.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="public/css/tasks.css" />
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
					<img src = "public/images/icons/homeSelected.png">
				</li>
			</a>

			<a href="projects/topBarAction/top=1">
				<li>
					<span>
					<p>Projects</p>
					<img src = "public/images/icons/projectsNonSelected.png">
					</span>
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
	<div class="contentTask">
	<div class="addTask">
		<li class="add"><a href="#non">Add new task</a></li>
	</div>
	<div id="projectTask">
		<p> Open Task   - Project Name</p>
		<form name="myform">
		    <label>Order By:</label>
			<select name="sort" id="sort"  onChange="javascript:document.myform.submit();">
    		<option value="name">State</option>
    		<option value="price">Priority</option>
    		<option value="price">Deadline</option>
    		<option value="price">ADD Date</option>
			</select>
			</form>
		</div>

		<div class="TaskMainView">
			<table class="OpenTask">
			 <thead>
					<tr>
						  <th scope="col">Nr</th>
						  <th scope="col">Message</th>		
						  <th scope="col">Date Added</th>
						  <th scope="col">Deadline</th>
						  <th scope="col">By</th>
					</tr>
					</thead>
					<tr>
						  <td>1</td>
						  <td>Marginirea body-ului</td>		
						  <td>12-12-2012</td>
						  <td>12-12-2014</td>
						  <td>Admin</td>
						  <td><li class="edit"><a href="#non">Edit</a></li></a></td>
					</tr>
					<tr>
						  <td>2</td>
						  <td>Marginirea body-ului</td>		
						  <td>12-12-2012</td>
						  <td>12-12-2014</td>
						  <td>Admin</td>
						  <td><li class="edit"><a href="#non">Edit</a></li></a></td>
					</tr>
					<tr>
						  <td>3</td>
						  <td>Marginirea body-ului</td>		
						  <td>12-12-2012</td>
						  <td>12-12-2014</td>
						  <td>Admin</td>
						  <td><li class="edit"><a href="#non">Edit</a></li></a></td>
					</tr>
					<tr>
						  <td>4</td>
						  <td>Marginirea body-ului</td>		
						  <td>12-12-2012</td>
						  <td>12-12-2014</td>
						  <td>Admin</td>
						  <td><li class="edit"><a href="#non">Edit</a></li></a></td>
					</tr>
			</table> 
			</div>
				<div id="projectTask">
		   <p> Closed Task   -Project Name</p>

		    </div>

			<div class="TaskMainView">
			<table class="ClosedTask">
			 <thead>
					<tr>
						  <th scope="col">Nr</th>
						  <th scope="col">Message</th>		
						  <th scope="col">Date Ended</th>
						  <th scope="col">By</th>
					</tr>
					</thead>
					<tr>
						  <td>1</td>
						  <td>Marginirea body-ului</td>		
						  <td>12-12-2014</td>
						  <td>Admin</td>
						  <td><a href="#non"><img src = "public/images/sageata.jpg" class = "sageata"></a></td>
					</tr>
					<tr>
						  <td>2</td>
						  <td>Marginirea body-ului</td>		
						  <td>12-12-2012</td>
						  <td>Admin</td>
						  <td><a href="#non"><img src = "public/images/sageata.jpg" class = "sageata"></a></td>
					</tr>
					<tr>
						  <td>3</td>
						  <td>Marginirea body-ului</td>		
						  <td>12-12-2012</td>
						  <td>Admin</td>
						  <td><a href="#non"><img src = "public/images/sageata.jpg" class = "sageata"></a></td>
					</tr>
					<tr>
						  <td>4</td>
						  <td>Marginirea body-ului</td>		
						  <td>12-12-2012</td>
						  <td>Admin</td>
						  <td><a href="#non"><img src = "public/images/sageata.jpg" class = "sageata"></a></td>
					</tr>
			</table> 
			</div>
</div>

</body>


</html>