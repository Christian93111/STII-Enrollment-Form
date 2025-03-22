<?php

require 'main.php';

if (isset($_GET['delete'])) {
    $del = $_GET['delete'];
    echo "
    <script>

    if (confirm('Are you sure you want to delete record?')) {
        window.location.href='../admin/dashboard.php?del_id=$del';
    }

    </script>
    ";
}

if (isset($_GET['del_id'])) {
    $del = $_GET['del_id'];
    $sql = "DELETE FROM tbl_fill WHERE id= $del";
    if ($conn -> query($sql) === TRUE) {
        echo "
        <script>

        window.alert('Record Deleted Successfully');
        window.location.href='../admin/dashboard.php';

        </script>
        ";
    } 

    else {
        echo "Error deleting record: " . $conn -> error;
    }
}

?>