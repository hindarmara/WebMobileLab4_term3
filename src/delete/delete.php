<?php
include('../header.php');
include("../display_student/process_display.php");
?>

<h1>Delete Student</h1>

<table>
    <tr>
        <td>Student ID:</td>
        <td><?php echo htmlspecialchars($row['StudentID']); ?></td>
    </tr>
    <tr>
        <td>First name: </td>
        <td><?php echo htmlspecialchars($row['FirstName']); ?></td>
    </tr>
    <tr>
        <td>Last name: </td>
        <td><?php echo htmlspecialchars($row['LastName']); ?></td>
    </tr>
    <tr>
        <td>School: </td>
        <td><?php echo htmlspecialchars($row['School']); ?></td>
    </tr>
</table>
<br />
<form action="process_delete.php" method="post">
    <input type="hidden" value="<?php echo htmlspecialchars($row['StudentID']); ?>" name="StudentID" />
    <a href="../" class="btn btn-small btn-primary">&lt;&lt; BACK</a>
    &nbsp;&nbsp;&nbsp;
    <input type="submit" value="Delete" class="btn btn-danger" />
</form>

<br />


<?php include("../footer.php"); ?>