<?php

$SQL_create_table = "CREATE TABLE IF NOT EXISTS Students (
    StudentID VARCHAR(10) NOT NULL,
    FirstName VARCHAR(80),
    LastName VARCHAR(80),
    School VARCHAR(50),
    PRIMARY KEY (StudentID)
);";

// if table does not exist, create it
$db->exec($SQL_create_table);

$SQL_insert_data = "INSERT INTO Students(StudentID, FirstName, LastName, School) 
VALUES
('A0000000000', 'John', 'Doe', 'Science'),
('A0000000001', 'Bane', 'Smith', 'Math'),
('A0000000002', 'Kim', 'Bond', 'History'),
('A0000000003', 'Jill', 'Valentine', 'English'),
('A0000000004', 'Donald', 'Duck', 'Art')
";

$res = $db->query("SELECT COUNT(*) as count FROM Students");
$row = $res->fetchArray();
if ($row['count'] == 0) {
    echo "Database is empty. Inserting data...<br>";
    $db->exec($SQL_insert_data);
}


?>