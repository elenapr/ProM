<html>
<!-- //projects delete/complete
//add new project delete pt user -->
<head>
	<link rel="stylesheet" href="public/css/menuStyle.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="public/css/messagesStyle.css" />
	<script type="text/javascript">
		function Expand(divId)
		{
			var divObject = document.getElementById(divId);
			divObject.className = "replyMessageVisible";

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
					<span>
					<p>Messages</p>
					<img src = "public/images/icons/messagesSelected.png">
					</span>
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
	
	<div id="content">
 		<div id="menu">
				<ul>
					<li><a href="messages/addNewSubject">Add new subject</a></li>
				</ul>
		</div>
		<div class="messagesMainView">
			<div class="messageDiv" id="divIdMessage">
				<a href="#" class="subject">This is the subject of this message</a>
				<ul id="messages">
					<li>
						<p class="addedBy">Added By: Ionescu Mihai</p>
						<p class="posted">Posted: 04-06-2014, ora 16:53</p>
						<p class="description">Sa se dezvolte o aplicatie Web care faciliteaza managementul sarcinilor de lucru. Fiecare utilizator, pe baza drepturilor contului, va putea face parte dintr-unul sau mai multe proiecte. Pentru fiecare activitate (task) se vor putea introduce informatii precum starea, prioritatea, persoana desemnata, descriere, comentarii, deadline etc. De asemenea, fiecare task va avea asociat un URL unic. Aplicatia va permite vizualizarea task-urilor dupa diferite criterii. Sistemul va oferi si posibilitatea de a atasa fisiere unei sarcini de lucru. Bonus: realizarea de diagrame Gantt privind desfasurarea unui proiect.</p>
					</li>
					<li>
						<p class="addedBy">Added By: Ionescu Mihai</p>
						<p class="posted">Posted: 04-06-2014, ora 16:53</p>
						<p class="description">Descriere mesaj.</p>
					</li>
				</ul>
				<div id="newMessage" class="replyMessageHidden">
							<ul id="message">
						<li>
							<p class="addedBy">Added By: Ionescu Mihai</p>
							<p class="posted">Posted: 04-06-2014, ora 16:53</p>
							<div contenteditable="true" id="edit">
								<p class="description">Add your message here!</p>
							</div>
							<input type="submit" name="saveSubmit" id="save" value="Add message" class="replyMessageVisible" onclick="return Collapse('save'); NotEditable('edit');" />
						</li>
					</ul>
				</div>
				<input type="Submit" value="Reply" name="saveSubmit" id="reply" onclick="return Expand('divIdMessage'); "/>
			</div>
		</div>
</body>
</html>