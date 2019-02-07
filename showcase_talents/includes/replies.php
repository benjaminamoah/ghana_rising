<?php
require("manage_db.php");

	if(isset($_POST['conversation_id'])){
		$manage_db = new manage_db();
		$name = $_POST['name'];
		$conversation_id = $_POST['conversation_id'];
		$reply_text = $_POST['reply_text'];
		
		if($reply_text == "Post your comments..."){
			$reply_text = "";
		}
		$date = time();
		
		$manage_db->return_query("INSERT INTO replies VALUES(null, '$conversation_id', '$name', '$reply_text', '', '$date')");

		$query_replies = $manage_db->return_query("SELECT * FROM replies WHERE conversation_id='$conversation_id' ORDER BY reply_id ASC");
		$replies = "";
		
		while($row = mysql_fetch_array($query_replies)){
			$name_of = $row['name']; 
			$reply = $row['reply'];
			$replies = "<b>".$name_of." </b>".$reply."<br />".$replies;
		}
		
		echo $replies;
	}
?>