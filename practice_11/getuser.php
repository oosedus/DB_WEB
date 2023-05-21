<?php
$q = $_GET['q'];
$conn = new mysqli("localhost", "root", "1234", 'ajax_demo');
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM user WHERE Firstname = '".$q."'";
$result = $conn->query($sql);
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $row['Firstname'] . "</td>";
echo "<td>" . $row['Lastname'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "<td>" . $row['Hometown'] . "</td>";
echo "<td>" . $row['Job'] . "</td>";
echo "</tr>";
}
echo "</table>";
$conn->close();
?>