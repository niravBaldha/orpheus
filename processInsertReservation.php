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

// Escape user inputs for security
$category = mysqli_real_escape_string($conn, $_REQUEST['category']);
$student_number = mysqli_real_escape_string($conn, $_REQUEST['student_number']);
$reservation_start = mysqli_real_escape_string($conn, $_REQUEST['reservation_start']);
$reservation_end = mysqli_real_escape_string($conn, $_REQUEST['reservation_end']);
$approved = mysqli_real_escape_string($conn, $_REQUEST['approved']);
$denied = mysqli_real_escape_string($conn, $_REQUEST['denied']);
$denied_reason = mysqli_real_escape_string($conn, $_REQUEST['denied_reason']);

// attempt insert query execution
$sql = "INSERT INTO treservations (fCategory, fStudentNumber, fReserveStart, fReserveEnd, fApproved, fDenied, fDeniedReason) VALUES ('$category', '$student_number', '$reservation_start', '$reservation_end', '$approved', '$denied', '$denied_reason')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	
}
 
// close connection
mysqli_close($conn);
?>