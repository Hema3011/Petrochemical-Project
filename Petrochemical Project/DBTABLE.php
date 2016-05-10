<?php
mysql_connect('localhost','Hema','');
mysql_select_db('database');
$sql="SELECT * FROM pcdata";
$records=mysql_query($sql);
?>
<html>
<head>
</head>
<body>
<h1 align="center"> Accident Table </h1>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th> Accident_Type </th>
<th> Location </th>
<th> Company_Name </th>
<th> Report_Name </th>
<th> Effected_Population </th> 
<tr>
</body> 
</html>
