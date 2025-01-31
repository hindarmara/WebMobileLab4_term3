<?php
// gets rid of special characters, $ / \ < > ( ) ; : , = ' " and `, there is sanitation process here
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>