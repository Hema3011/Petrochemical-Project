<?php $link1=mysql_connect("localhost","Hema","");
	mysql_select_db("database");
 
 $result1=mysql_query("select * from pcdata",$link1);
	show_data($result1);

	mysql_close($link1)
 function show_data($result)
 ?>
