<?php
# code for the php to-do list

// Database Constants
define("DB_SERVER", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASS", "happy");
define("DB_NAME", "folio");

// 1. Create a database connection
$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if ( !$connection ) {
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use
$db_select = mysql_select_db(DB_NAME, $connection);
if ( !$db_select ) {
	die("Database selection failed: " . mysql_error());
}

function setTask( $task ) {
	global $connection;
	$query = "INSERT INTO todo (task, completed, visible) VALUES (\"{$task}\", 0, 1)";
	$result = mysql_query( $query, $connection );
	#echo mysql_error();
}

function confirm_query( $result_set ) {
	if ( !$result_set ) {
		die("Database query failed: " . mysql_error() );
	}
}
# Delete All Rows from table
function deleteRows () {
	global $connection;
	$query = "DELETE FROM todo";
	$result = mysql_query( $query, $connection );
	$query = "ALTER TABLE todo AUTO_INCREMENT = 1";
	$result = mysql_query( $query, $connection );
}
# Set task completion flag to 1 using Task Number
function completedTask ( $taskNum ) {
	global $connection;
	$query = "UPDATE todo SET completed = 1 WHERE id={$taskNum}";
	$result = mysql_query($query, $connection);
	#if ( ) {
	#	echo "Change Success, " . mysql_affected_rows() . " rows affected.";
	#} else {
	#	echo mysql_error();
	#}
}
# Set task visibility to 0 using Task Number
function hideTask( $taskNum ) {
	global $connection;
	$newText = "Something";
	$query = "UPDATE todo SET visible=0 WHERE id={$taskNum}";
	$result = mysql_query($query, $connection);
}
# Displays All Visible Tasks
function getAllTask() {
	global $connection;
	$query = "SELECT * FROM todo WHERE visible=1";
	$result = mysql_query($query, $connection);
	
	while ( $list = mysql_fetch_array($result) ) {
		#echo print_r($list) . "<br/>";
		echo "Task #" . $list[0] . ": " . $list[1] . "<br />";
	}
}
# Displays All Visible Tasks
function getHiddenTask() {
	global $connection;
	$query = "SELECT * FROM todo WHERE visible=0";
	$result = mysql_query($query, $connection);
	
	while ( $list = mysql_fetch_array($result) ) {
		echo "Task #" . $list[0] . ": " . $list[1] . "<br />";
	}
}

# Check for task
if ( isset( $_POST['task'] ) && $_POST['task'] !== "" ) {		
	$taskName = $_POST['task'];
	#echo $taskName;
	setTask( $taskName );
}

# Check for hide task number
if ( isset( $_POST['hideNum'] ) ) {
	$taskNum = $_POST['hideNum'];
	hideTask( $taskNum );
}

#echo "Task List: " . "<br/>";
#echo getAllTask();
#echo "<br/>";
#echo "<form name='todo-php' action='todo.php' method='post'>";
#echo "<input type='text' name='task' placeholder='enter task here' />";
#echo "<input type='text' name='hideNum' placeholder='when task is done, enter task number to archive.' />";
#echo "<input type='submit' name='submit' />";
#echo "</form>";

?>
