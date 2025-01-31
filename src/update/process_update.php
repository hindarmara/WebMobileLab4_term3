<?php
if (isset($_POST['update'])) {

    include("../inc_db_params.php");
    include("../utils.php");

    if ($db !== FALSE) {
        // Sanitize input to prevent SQL Injection & XSS
        $StudentID = sanitize_input($_POST['StudentID']);
        $FirstName = sanitize_input($_POST['FirstName']);
        $LastName = sanitize_input($_POST['LastName']);
        $School = sanitize_input($_POST['School']);

        // SQL query to update the record
        $sql = "UPDATE Students SET FirstName = :firstName, LastName = :lastName, School = :school WHERE StudentID = :studentID";

        // Prepare statement
        $stmt = $db->prepare($sql);

        // Bind parameters
        $stmt->bindValue(':firstName', $FirstName, SQLITE3_TEXT);
        $stmt->bindValue(':lastName', $LastName, SQLITE3_TEXT);
        $stmt->bindValue(':school', $School, SQLITE3_TEXT);
        $stmt->bindValue(':studentID', $StudentID, SQLITE3_TEXT);

        // Execute query
        $exec = $stmt->execute();

        // Check if update was successful
        if ($exec) {
            header('Location: ../'); // Redirect to student list
            exit;
        } else {
            echo "Error updating record: " . $db->lastErrorMsg();
        }

        // Close statement
        $stmt->close();
    }

    // Close database connection
    $db->close();
}
?>