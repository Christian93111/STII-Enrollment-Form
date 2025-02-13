<?php

require 'main.php';

if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];

    $sql = "DELETE FROM tbl_fill WHERE id= $delete";

    if ($conn -> query($sql) === TRUE) {
        echo "

        <script>

        window.alert('Record Deleted Successfully');
        window.location.href='../admin/database.php';

        </script>

        ";
    } 

    else {
        echo "Error deleting record: " . $conn -> error;
    }

}

?>