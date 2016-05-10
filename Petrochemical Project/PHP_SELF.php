<?php
if (!empty($Accident_Type)){

    $db_name="database"; // Database name
    $tbl_name="pcdata"; // Table name


    $sql="SELECT details FROM $tbl_name WHERE id = $Accident_Type";
    $result=mysql_query($sql);
    while($rows=mysql_fetch_array($result)){
        $id=$rows['id'];
        $details=$rows['details'];

       // close while loop 
     }
}//close if statement
 ?>