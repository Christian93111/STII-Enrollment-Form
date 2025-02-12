<?php

require 'main.php';

if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];

    $sql = "DELETE FROM tbl_fill WHERE id= $delete";

    if ($conn -> query($sql) === TRUE) {
        header('location: ../admin/database.php');
    } 

    else {
        echo "Error deleting record: " . $conn -> error;
    }

}

?>