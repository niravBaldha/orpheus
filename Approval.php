<?php
    $servername = "127.0.0.1";
    $username = "wp_eatery";
    $password = "password";
    $dbname = "wp_eatery";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connections are failed: " . mysqli_connect_error());
        exit(1);
    }
?>
<?php
            $query="select * from treservations";
            $result = $conn->query($query);
?>


<html>

<head>
<title>Approval</title>
</head>
<body>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Category</th>
<th>Student Number</th>
<th>Reservation Start</th>
<th>Reservation End</th>
<th>Approved</th>
<th>Denied</th>
<th>Denied Reason</th>
</tr>

<?php

while($employee=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>" .$employee['fCategory']. "</td>";
	echo "<td>" .$employee['fStudentNumber']. "</td>";
	echo "<td>" .$employee['fReserveStart']. "</td>";
	echo "<td>" .$employee['fReserveEnd']. "</td>";
	echo "<td>" .$employee['fApproved']. "</td>";
	echo "<td>" .$employee['fDenied']. "</td>";
	echo "<td>" .$employee['fDeniedReason']. "</td>";
	echo "</tr>";
	
}//end while

?>


</table>
<body>
</html>