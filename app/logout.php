<?php
	include '../init.php';
	if(isset($_SESSION['account']))
	{
		session_destroy();
		header("Caikid-ResponseStatus:ok");
		return;
	}
	else{
		header("Caikid-ResponseStatus:session-not-exist");
		echo 'null';
		return;
	}

?>