<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Reservation</title>
</head>
<body>
 <h1>Add Reservation </h1>
<form action="processInsertReservation.php" method="post">
    <table>
	<tr>
        <td>Category:</td>
        <td><input type="text" name="category" id="category"></td>
    </tr>
    <tr>
        <td>Student Number:</td>
        <td><input type="text" name="student_number" id="student_number"></td>
    </tr>
	<tr>
        <td>Reservation Start:</td>
        <td><input type="date" name="reservation_start" id="reservation_start"></td>
    </tr>
	<tr>
        <td>Reservation End:</td>
        <td><input type="date" name="reservation_end" id="reservation_end"></td>
    </tr>
<!--	<tr>
	<td>Status:</td>
	<td> <input type="radio" name="gender" value="approved"> Approved<br><input type="radio" name="gender" value="denied"> Denied<br> </td>
	-->
	<tr>
        <td>Approved:</td>
        <td><input type="text" name="approved" id="approved"></td>
    </tr>
	<tr>
        <td>Denied:</td>
        <td><input type="text" name="denied" id="denied"></td>
    </tr>
	<tr>
        <td>Denied Reason:</td>
        <td><input type="text" name="denied_reason" id="denied_reason"></td>
    </tr>
    <tr>
		<td><input type="submit" value="Submit"></td>
		
		<td><button><a href="Approval.php">Show Reservation</a></button></td>
	</tr>
	</table>
</form>
</body>
</html>