<?php include('../header.php'); ?>

<h1>Display Student</h1>

<?php include("./process_display.php")

// if (isset($_GET['id'])) {
//     include("../inc_db_params.php");
//     $id = $_GET['id'];

//     if ($db !== FALSE) {
//         // Create a prepared statement
//         $stmt = $db->prepare("SELECT * FROM Students WHERE StudentID = :id");

//         // Bind parameters to the prepared statement
//         $stmt->bindValue(':id', $id, SQLITE3_TEXT);

//         // Execute the query
//         $res = $stmt->execute();

//         // Fetch the data
//         $row = $res->fetchArray();

//         // Close the prepared statement
//         $stmt->close();
//     } else {
//         echo "Database connection failed.";
//     }
// } else {
//     echo "Debug: ID received = " . htmlspecialchars($_GET['id']) . "<br>";
// }
?>

<?php if (!empty($row)): ?>
    <div class="card text-bg-info mb-3" style="max-width: 20rem;">
        <div class="card-header">Student ID: <?php echo $row['StudentID']; ?></div>
        <div class="card-body">
            <h5 class="card-title">First name: <?php echo $row['FirstName']; ?></h5>
            <p class="card-text">Last name: <?php echo $row['LastName']; ?></p>
            <p class="card-text">School: <?php echo $row['School']; ?></p>
        </div>
    </div>
<?php else: ?>
    <p>No data found.</p>
<?php endif; ?>

<a href="../index.php" class="btn btn-small btn-primary">&lt;&lt; BACK</a>

<?php include("../footer.php"); ?>