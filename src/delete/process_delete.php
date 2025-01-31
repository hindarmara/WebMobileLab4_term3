<?php
if (isset($_POST['StudentID'])) {
    include("../inc_db_params.php");

    if($db !== FALSE) 
    {
        $id = $_POST['StudentID'];

        // Prepare delete statement
        $stmt = $db->prepare("DELETE FROM Students WHERE StudentID = :id");
        
        // Bind parameters to the prepared statement
        $stmt->bindValue(':id', $id, SQLITE3_TEXT);

        // Execute the query
        $exec = $stmt->execute();

        // check if delete failed
        if (!$exec) {
            echo "Error deleting record: " . $db->lastErrorMsg();
            die("Error deleting record: " . $db->lastErrorMsg()); // Debugging purpose
        } else {
            header('Location: ../'); // PHP redirect
            echo "<script>window.location.href='../';</script>"; // JavaScript redirect as backup
            exit;
        }

        // Close the prepared statement
        $stmt->close();
    }

    // Close the database connection
    $db->close();
}
?>