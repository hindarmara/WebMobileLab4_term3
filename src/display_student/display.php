<?php include('../header.php'); ?>

<h1>Display Student</h1>

<?php include("./process_display.php")?>

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