 <html>
<head>
  <title>Accidents in Petrochemical industry</title>
</head>
<body>

<h1 align="center"> Petrochemical Accident Repository </h1>
<h2 align="center"> Select the accident type </h1>
<p align="center">
<select name="ACCIDENT TYPE" id="wgtmsr" style="width: 150px";>
  <option value="1">Flammable Vapor</option>
<option value="2">Combustible Dust Explosion and Fire</option>
  <option value="3">Chemical Manufacturing - Fire and Explosion</option>
  <option value="4">Oil and Refining - Fire and Explosion</option>
<option value="5">Chemical Distribution- Fire and Explosion</option>
<option value="6">Reactive Incident</option>
<option value="7">Community Impact</option>
<option value="8">Confined Space / Asphyxiation</option>
<option value="9">Hot Work - Explosion and Fire</option>
<option value="10">Release</option>
</select>
<?php
$host=`localhost`;
$user=`Hema`;
$pw=``;
$db=`database`;
$con=mysqli_connect("$host", "$user", "$pw", "$db");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM pcdata";

$result = $con->query($sql);
echo "<table border='1'>
<tr>
<th>Accident_Type</th>
<th>Accident_Name</th>
<th>Location</th>
<th>Company_Name</th>
<th>Report_Name</th>
</tr>";
echo "connection successful";
echo $result;
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Accident_Type'] . "</td>";
echo "<td>" . $row['Accident_Name'] . "</td>";
echo "<td>" . $row['Location'] . "</td>";
echo "<td>" . $row['Company_Name'] . "</td>";
echo "<td>" . $row['Report_Name'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</p>
</body>
</html>