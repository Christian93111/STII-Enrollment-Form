<?php

require 'main.php';
if(isset($_POST['submit'])) {
    // ---------- Student Information ----------

    $sfname = $_POST['s_fname'];
    $slname = $_POST['s_lname'];
    $smname = $_POST['s_mname'];
    $ssuffix = $_POST['s_suffix'];
    $sdatebirth = $_POST['s_datebirth'];
    $splacebirth = $_POST['s_placebirth'];
    $sage = $_POST['s_age'];
    $srelationship = $_POST['s_relationship'];
    $saddress = $_POST['s_address'];
    $szipcode = $_POST['s_zipcode'];
    $semail = $_POST['s_email'];
    $scell = $_POST['s_cell'];
    $stype = $_POST['type'];
    $sreligion = $_POST['s_religion'];

    // ---------- Parent & Guardian Information ----------
    $pfname = $_POST['p_fname'];
    $plname = $_POST['p_lname'];
    $pmname = $_POST['p_mname'];
    $psuffix = $_POST['p_suffix'];
    $page = $_POST['p_age'];
    $pwork = $_POST['p_work'];
    $prelationship = $_POST['p_relationship'];
    $paddress = $_POST['p_address'];
    $pzipcode = $_POST['p_zipcode'];
    $pemail = $_POST['p_email'];
    $pcell = $_POST['p_cell'];
    $preligion = $_POST['p_religion'];

    $sql = "UPDATE tbl_fill SET s_fname = '$sfname', s_lname = '$slname', s_mname = '$smname', s_suffix = '$ssuffix' , s_datebirth = '$sdatebirth', s_placebirth = '$splacebirth', s_age = '$sage', s_relationship = '$srelationship', s_address = '$saddress', s_zipcode = '$szipcode', s_email = '$semail', s_cell = '$scell', s_type = '$stype', s_religion = '$sreligion', p_fname = '$pfname', p_lname = '$plname', p_mname = '$pmname', p_age = '$page', p_suffix = '$psuffix', p_relationship = '$prelationship', p_religion = '$preligion', p_address = '$paddress', p_zipcode = '$pzipcode', p_cell = '$pcell', p_email = '$pemail', p_work = '$pwork'";

    if ($conn -> query($sql) === TRUE) {
        header('Location: ../admin/database.php');
    } 

    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>