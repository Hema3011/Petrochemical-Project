<?php
$host=`localhost`;
$user=`Hema`;
$pw=``;
$db=`database`;

 $con = mysql_connect($host, $user, $db);
        // selecting database
 mysql_select_db($db);

  $sql="select * from pcdata";
        
 $result=mysql_query($sql);

echo $result;
?>