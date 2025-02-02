<?php include 'header.php'; ?>
<!-- menu on the top -->
<h1>List of Students</h1>
<p>
    <a href="./create_student/create.php" class="btn btn-small btn-success">Create New</a>
</p>

<?php
include("./inc_db_params.php");
include("./insert_default_student.php");

$res = $db->query('SELECT * FROM Students');

if ($res) {
    echo "<table width='100%' class='table-striped'>\n";
    echo "<tr><th>Student ID</th>" .
        "<th>First Name</th>" .
        "<th>Last Name</th>" .
        "<th>School</th>" .
        "<th>Option</th></tr>\n";

    while ($row = $res->fetchArray()) {
        echo "<tr><td>{$row['StudentID']}</td>";
        echo "<td>{$row['FirstName']}</td>";
        echo "<td>{$row['LastName']}</td>";
        echo "<td>{$row['School']}</td>";
        echo "<td>";
        echo "<a class='btn btn-small btn-primary' href='./display_student/display.php?id={$row['StudentID']}'>display</a>";
        echo "&nbsp;";
        echo "<a class='btn btn-small btn-warning' href='./update/update.php?id={$row['StudentID']}'>update</a>";
        echo "&nbsp;";
        echo "<a class='btn btn-small btn-danger' href='./delete/delete.php?id={$row['StudentID']}'>delete</a>";
        echo "</td></tr>\n";
    }
    echo "<hr />";
    echo "</table>\n";
} else {
    echo "No data found.";
}

include 'footer.php' ?>