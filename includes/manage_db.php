<?php
	require("db.php");

	class manage_db extends db{
//1.
		function connect(){
			$db_info = new db();
			$connect = mysql_connect($db_info->db_host, $db_info->db_user, $db_info->db_pass) or die(mysql_error());
			return $connect;
		}

//2.
		function select_db(){
			$db_info = new db();
			$connect = $this->connect();
			mysql_select_db($db_info->db_name, $connect);
		}

//3.
		function query($sql){
			$connect = $this->connect();
			$this->select_db();
			mysql_query($sql, $connect) or die(mysql_error());
		}

//4.
		function return_query($sql){
			$connect = $this->connect();
			$this->select_db();
			$query = mysql_query($sql, $connect) or die(mysql_error());
			return $query;
		}

	}

?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82646161-1', 'auto');
  ga('send', 'pageview');

</script>