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

// --------------------- Temp ----------------------------

    // if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //     if (empty($_POST['sname'])) {
    //         echo "First name is Required";
    //     }
    // }

// ---------------------------------------------------

    $sql = "INSERT INTO tbl_fill (s_fname, s_lname, s_mname, s_suffix, s_datebirth, s_placebirth, s_age, s_relationship, s_address, s_zipcode, s_email, s_cell, s_type, s_religion, p_fname, p_lname, p_mname, p_age, p_suffix, p_relationship, p_religion, p_address, p_zipcode, p_cell, p_email, p_work)
    VALUES ('$sfname', '$slname', '$smname', '$ssuffix', '$sdatebirth', '$splacebirth', '$sage', '$srelationship', '$saddress', '$szipcode', '$semail', '$scell', '$stype', '$sreligion', '$pfname', '$plname', '$pmname', '$page', '$psuffix', '$prelationship', '$preligion', '$paddress', '$pzipcode', '$pcell', '$pemail', '$pwork')";

    if ($conn -> query($sql) === TRUE) {
        header('Location: ../done.html');
    } 

    else {
        echo "Error: " . $sql . "<br>" . $conn -> error;
    }

}


// --------------------- Practice Code ----------------------------

    // function family($firstname, $lastname) {
    //     $txt = "";
    //     $len = count($firstname);
    //     for($i = 0; $i < $len; $i++) {
    //         $txt = $txt. "Hi, $firstname[$i] $lastname.<br>";
    //     }
    //     return $txt;

    // $a = family("Doe","Jane", "John", "Joey");
    // echo $a;
    // }

?>