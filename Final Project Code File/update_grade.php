<h2>Update Grade</h2>

<?php
require_once('mysqli_connect.php');

$id = mysqli_real_escape_string($dbc, $_POST['id']);
$gradeID = mysqli_real_escape_string($dbc, $_POST['gradeID']);
$letter = mysqli_real_escape_string($dbc, $_POST['letter']);
$courseID = mysqli_real_escape_string($dbc, $_POST['courseID']);
$studentID = mysqli_real_escape_string($dbc, $_POST['studentID']);

$query = "UPDATE grade SET gradeID='$gradeID',letter='$letter',courseID='$courseID',studentID='$studentID' WHERE id='$id'";
$result = @mysqli_query($dbc, $query);
if ($result) {
    echo "<p><b>The selected record has been updated.</b></p>";
} else {
    echo "<p>The record could not be updated due to a system error" . mysqli_error($dbc) . "</p>";
}
mysqli_close($dbc);
?>

<p><a href=index.php>Go back</a></p>