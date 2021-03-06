<!DOCTYPE HTML>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title></title>
	
	
	<!-- Included CSS Files (Uncompressed) -->
	<!--
	<link rel="stylesheet" href="stylesheets/foundation.css">
	-->
	
	<!-- Included CSS Files (Compressed) -->
	<link rel="stylesheet" href="stylesheets/foundation.min.css">
	<link rel="stylesheet" href="stylesheets/app.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Bowlby+One+SC' rel='stylesheet' type='text/css'>
	
	<script src="javascripts/modernizr.foundation.js"></script>
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php 
		# include the todo application logic
		set_include_path('includes/');
		include('todo.php'); 
	?>
	
</head>
<body>

	<nav class="top-bar show">
		<ul>
			<li class="name">
				<h1><a id="logo" href="index.html">Not Another Website!</a></h1>
			</li>
			<li class="divider"></li>
		</ul>
		<ul class="right">
			<li><a href="contact.html">Contact</a></li>
		</ul>
		<ul class="right">
			<li class="active"><a href="fun.html">Fun Stuff</a></li>
			<li class="divider"></li>
		</ul>
		<ul class="right">
			<li class="has-dropdown"><a href="features.html">Features</a>
				<ul class="dropdown">
					<li><a href="features.html#frontend">Front-End</a></li>
					<li><a href="features.html#backend">Back-End</a></li>
				</ul>
			</li>
			<li class="divider"></li>
		</ul>
		<ul class="right">
			<li><a href="about.html">About</a></li>
			<li class="divider"></li>
		</ul>
	</nav>
	<br/><br/><br/>

	<div class="row cf">
		<h4>JQuery</h4>
		<div class="five columns">
			<div id="menu-slide-up">Click Here to Slide Up the Menu.</div>
			<br/>
			<div id="menu-slide-down">Click Here to Slide Down the Menu</div>
			<br/>
			<div id="menu-fadeout">Click Here to Fade-Out the Menu</div>
			<br/>
			<div id="menu-fadein">Click Here to Fade-In the Menu</div>
			<br/>

		</div>
		<div class="seven columns">
			<div id="reduce-opacity">Click Here to Reduce Opacity of the Menu by 0.1</div>
			<br/>
			<div id="increase-opacity">Click Here to Increase Opacity of the Menu by 0.1</div>
			<br/>
			<div id="move-down">Click Here to Move Down the Menu by 10px</div>
			<br/>
			<div id="move-up">Click Here to Move Up the Menu by 10px</div>
		</div>
	</div>
	<br /><br/><br/>
	<div class="row cf">
		<h4>Javascript</h4>
		<p>This is a simple to-do list which does not store the input in any database.  Neither does it use an array to store the tasks.
			Instead, the javascript creates li elements and text nodes on the fly.  The li elements are created with unique id hooks such that
			they may be identified later on by the javascript for deletion or other manipulation.  Since the data is not stored anywhere, the
			data will be lost when the user leaves this page.
		</p>
		<div class="six columns">
			<h6>Enter Information Here</h6>
			<input id="test-input" type="text" placeholder="enter task" /><a href="#" id="test-entry" class="postfix button expand">Enter</a>
			<br /><br /><br /><br />
			<h6>Enter Task # to Delete Here</h6>
			<input id="delete-task" type="text" placeholder="task # to delete" /><a href="#" id="delete-entry" class="alert postfix button expand">Delete</a>
		</div>
		<div class="six columns">
			<h6>To-Do List</h6>
			<div><ul id="test-output"></ul></div>
		</div>
	</div>
	<br/><br/><br/>
	<div class="row cf">
		<h4>PHP</h4>
		<p>Using PHP to create the to-do list is significantly different from the above example.  Although we can use an array to store many
			objects by default using PHP or Javascript, once the submit button has been hit, the form data will be sent and the object persistence is lost.
			Persistence is through the usage of a database.  PHP and MySQL are chosen for this particular to-do list example.
		</p>
		<div class="six columns">
			<form action="fun.php" name="todo-php" method="post">
				<input type="text" name="task" placeholder="enter task here" />
				<input type="text" name="hideNum" placeholder="when task is done, enter task number to archive" />
				<input type="submit" name="submit" />
			</form>
		</div>
		<div class="six columns">
			<h6>To-Do List:</h6>
			<?php getAllTask(); ?>
			<br/>
		</div>
	</div>
	
	
	

	<!-- Included JS Files (Uncompressed) -->
	<!--
	
	<script src="javascripts/jquery.js"></script>
	
	<script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="javascripts/jquery.foundation.forms.js"></script>
	
	<script src="javascripts/jquery.foundation.reveal.js"></script>
	
	<script src="javascripts/jquery.foundation.orbit.js"></script>
	
	<script src="javascripts/jquery.foundation.navigation.js"></script>
	
	<script src="javascripts/jquery.foundation.buttons.js"></script>
	
	<script src="javascripts/jquery.foundation.tabs.js"></script>
	
	<script src="javascripts/jquery.foundation.tooltips.js"></script>
	
	<script src="javascripts/jquery.foundation.accordion.js"></script>
	
	<script src="javascripts/jquery.placeholder.js"></script>
	
	<script src="javascripts/jquery.foundation.alerts.js"></script>
	
	<script src="javascripts/jquery.foundation.topbar.js"></script>
	
	-->
	
	<!-- Included JS Files (Compressed) -->
	<script src="javascripts/jquery.js"></script>
	<script src="javascripts/foundation.min.js"></script>
	<script src="javascripts/script.js"></script>
	<script src="javascripts/todo.js"></script>
	
	<!-- Initialize JS Plugins -->
	<script src="javascripts/app.js"></script>

</body>
</html>