<?php include('../header.php'); ?>

<?php
include("../display_student/process_display.php");
?>

<h1>Update</h1>

<div class="row">
    <div class="col-md-4">
        <form action="process_update.php" method="post">

            <div class="form-group">
                <input type="hidden" value="<?php echo htmlspecialchars($row['StudentID']); ?>" name="StudentID" />
                <label class="control-label">Student ID</label>
                <?php echo htmlspecialchars($row['StudentID']); ?>
            </div>

            <div class="form-group">
                <label for="FirstName" class="control-label">First Name</label>
                <input type="text" class="form-control" name="FirstName" id="FirstName" 
                    value="<?php echo htmlspecialchars($row['FirstName']); ?>" required />
            </div>

            <div class="form-group">
                <label for="LastName" class="control-label">Last Name</label>
                <input type="text" class="form-control" name="LastName" id="LastName" 
                    value="<?php echo htmlspecialchars($row['LastName']); ?>" required />
            </div>

            <div class="form-group">
                <label for="School" class="control-label">School</label>
                <input type="text" class="form-control" name="School" id="School" 
                    value="<?php echo htmlspecialchars($row['School']); ?>" required />
            </div>

            <div class="form-group">
                <a href="../list" class="btn btn-small btn-primary">&lt;&lt; BACK</a>
                &nbsp;&nbsp;&nbsp;
                <input type="submit" value="Update" name="update" class="btn btn-warning" />
            </div>

        </form>
    </div>
</div>

<?php include('../footer.php'); ?>