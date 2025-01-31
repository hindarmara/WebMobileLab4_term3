<?php 

if (isset($_GET['id'])) {
    include("../inc_db_params.php");
    $id = $_GET['id'];

    if ($db !== FALSE) {
        // Create a prepared statement
        $stmt = $db->prepare("SELECT * FROM Students WHERE StudentID = :id");

        // Bind parameters to the prepared statement
        $stmt->bindValue(':id', $id, SQLITE3_TEXT);

        // Execute the query
        $res = $stmt->execute();

        // Fetch the data
        $row = $res->fetchArray();

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Database connection failed.";
    }
} else {
    echo "Debug: ID received = " . htmlspecialchars($_GET['id']) . "<br>";
}

?>