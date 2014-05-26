<html>

<head>
	<link rel="stylesheet" href="public/css/menuStyle.css" type="text/css">
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
			<a href="menu/topBarAction/top=0">
				<li>
					<span>
						<p>Home</p>
						<img src = "public/images/icons/homeSelected.png">
					</span>
				</li>
			</a>

			<a href="menu/topBarAction/top=1">
				<li>
					<p>Projects</p>
					<img src = "public/images/icons/projectsNonSelected.png">
				</li>
			</a>

			<a href="menu/topBarAction/top=2">
				<li>
					<p>Tasks</p>
					<img src = "public/images/icons/tasksNonSelected.png">
				</li>
			</a>

			<a href="menu/topBarAction/top=3">
				<li>
					<p>Messages</p>
					<img src = "public/images/icons/messagesNonSelected.png">
				</li>
			</a>

			<a href="menu/topBarAction/top=4">
				<li>
					<p>Files</p>
					<img src = "public/images/icons/filesNonSelected.png">
				</li>
			</a>

			<a href="menu/topBarAction/top=5">
				<li>
					<p>Profile</p>
					<img src = "public/images/icons/profileNonSelected.png">
				</li>
			</a>
		</ul>
	</div>

	<div id = "content"> 

		<?php
			if(isset($this->data['newProjects']))
			{
				echo "<div id = \"newProject\">";

				for($i=0;$i<count($this->data['newProjects']);$i++)
				{
					echo "<div class = \"newProjectContent\">";
					echo "<p> !   Project '".$this->data['newProjects'][$i]['name']."' has been added to your list!";
					echo "</p></div>";
				}

				echo "</div>";
			}
		?>

	<?php
		if(isset($this->data['today_tasks']) && count($this->data['today_tasks']) != 0)
		{
			echo "<div class = \"tableContent\">";

			echo  "<div class = \"topTable\">";
			echo "<p>Today's Tasks</p>";
			echo "</div>";
			
			echo "<table>";
			echo "<tr>";
				echo "<th class = \"myTh1\">nr</th>";
				echo "<th class = \"myTh2\">task</th>";
				echo "<th class = \"myTh3\">project</th>";
				echo "<th class = \"myTh4\">by</th>";
			echo "</tr>";

			for($i=0;$i<count($this->data['today_tasks']);$i++)
			{
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td >".$this->data['today_tasks'][$i]['task']."</td>";
				echo "<td >".$this->data['today_tasks'][$i]['project']."</td>";
				echo "<td >".$this->data['today_tasks'][$i]['added_by']."</td>";
				echo "</tr>";
			}

			echo "</table>";
			echo "</div>";
		}
	?>

	<?php
		if(isset($this->data['newMessage']) && count($this->data['newMessage']) != 0)
		{
			echo "<div class = \"tableContent\">";

			echo  "<div class = \"topTable\">";
			echo "<p>Today's Messages</p>";
			echo "</div>";
			
			echo "<table>";
			echo "<tr>";
				echo "<th class = \"myTh1\">nr</th>";
				echo "<th class = \"myTh2\">task</th>";
				echo "<th class = \"myTh3\">project</th>";
				echo "<th class = \"myTh4\">by</th>";
			echo "</tr>";

			for($i=0;$i<count($this->data['newMessage']);$i++)
			{
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td >".$this->data['newMessage'][$i]['message']."</td>";
				echo "<td >".$this->data['newMessage'][$i]['project']."</td>";
				echo "<td >".$this->data['newMessage'][$i]['added_by']."</td>";
				echo "</tr>";
			}

			echo "</table>";
			echo "</div>";
		}
	?>

	</div>

	<!--<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Online Project Manager</span> by <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">ProM</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://localhost/OnlineManager/" rel="dct:source">http://localhost/OnlineManager/</a>.-->

</body>


</html>