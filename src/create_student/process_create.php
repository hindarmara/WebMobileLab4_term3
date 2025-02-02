<?php
// create coresponds to the name of the button in create.php
if (isset($_POST['create'])) {

    include("../inc_db_params.php");
    include("../utils.php"); // for sanitize_input

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";


    if ($db !== FALSE) {
        extract($_POST);

        /*
        $fn = $_POST["firstName"];
        $lnn = $_POST["lastName"];
        $gender = $_POST["gender"];

        there is more nifty way to do this, using extract function
        extract($_POST); get loca variable called $fn, $ln and &gender
        */

        $StudentID = sanitize_input($_POST['StudentID']);
        $FirstName = sanitize_input($_POST['FirstName']);
        $LastName = sanitize_input($_POST['LastName']);
        $School = sanitize_input($_POST['School']);

        // Use prepared statements with named placeholders
        $stmt = $db->prepare("INSERT INTO Students (StudentID, FirstName, LastName, School) VALUES (:StudentID, :FirstName, :LastName, :School)");

        // Bind parameters to the prepared statement
        $stmt->bindValue(':StudentID', $StudentID, SQLITE3_TEXT);
        $stmt->bindValue(':FirstName', $FirstName, SQLITE3_TEXT);
        $stmt->bindValue(':LastName', $LastName, SQLITE3_TEXT);
        $stmt->bindValue(':School', $School, SQLITE3_TEXT);

        // Execute the statement
        $exec = $stmt->execute();


        if ($exec === false) {
            echo "Error inserting record: " . $db->lastErrorMsg();
            die("Error inserting record: " . $db->lastErrorMsg()); // Debugging purpose
        }
        else {
            header('Location: ../'); // PHP redirect
            // echo "<script>window.location.href='../';</script>"; // JavaScript redirect as backup
            exit;
        }
    };
    // when done close statment object and connection
    $stmt->close();
    $db->close();

}

?>
