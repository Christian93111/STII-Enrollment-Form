<?php

require 'main.php';

if(isset($_POST['update'])) {

    $id = $_POST['id'];

    // ---------- Student Information ----------

    $s_fname = $_POST['s_fname'];
    $s_lname = $_POST['s_lname'];
    $s_mname = $_POST['s_mname'];
    $s_suffix = $_POST['s_suffix'];
    $s_datebirth = $_POST['s_datebirth'];
    $s_placebirth = $_POST['s_placebirth'];
    $s_age = $_POST['s_age'];
    $s_relationship = $_POST['s_relationship'];
    $s_address = $_POST['s_address'];
    $s_course = $_POST['s_course'];
    $s_email = $_POST['s_email'];
    $s_cell = $_POST['s_cell'];
    $s_type = $_POST['type'];
    $s_religion = $_POST['s_religion'];
    $s_year = $_POST['s_year'];
    $s_past = $_POST['s_past_school'];

    // ---------- Parent & Guardian Information ----------

    $m_fname = $_POST['m_fname'];
    $m_lname = $_POST['m_lname'];
    $m_mname = $_POST['m_mname'];
    $m_datebirth = $_POST['m_datebirth'];
    $m_age = $_POST['m_age'];
    $m_relationship = $_POST['m_relationship'];
    $m_address = $_POST['m_address'];
    $m_email = $_POST['m_email'];
    $m_cell = $_POST['m_cell'];
    $m_religion = $_POST['m_religion'];
    $m_work = $_POST['m_work'];

    $f_fname = $_POST['f_fname'];
    $f_lname = $_POST['f_lname'];
    $f_mname = $_POST['f_mname'];
    $f_suffix = $_POST['f_suffix'];
    $f_datebirth = $_POST['f_datebirth'];
    $f_age = $_POST['f_age'];
    $f_relationship = $_POST['f_relationship'];
    $f_address = $_POST['f_address'];
    $f_email = $_POST['f_email'];
    $f_cell = $_POST['f_cell'];
    $f_religion = $_POST['f_religion'];
    $f_work = $_POST['f_work'];

    $g_fname = $_POST['g_fname'];
    $g_lname = $_POST['g_lname'];
    $g_mname = $_POST['g_mname'];
    $g_suffix = $_POST['g_suffix'];
    $g_datebirth = $_POST['g_datebirth'];
    $g_age = $_POST['g_age'];
    $g_relationship = $_POST['g_relationship'];
    $g_address = $_POST['g_address'];
    $g_email = $_POST['g_email'];
    $g_cell = $_POST['g_cell'];
    $g_religion = $_POST['g_religion'];
    $g_work = $_POST['g_work'];

    // ---------------------------------------------------

    $sql = "UPDATE tbl_fill SET s_fname = '$s_fname', s_lname = '$s_lname', s_mname = '$s_mname', s_suffix = '$s_suffix' , s_datebirth = '$s_datebirth', s_placebirth = '$s_placebirth', s_age = '$s_age', s_relationship = '$s_relationship', s_address = '$s_address', s_course = '$s_course', s_email = '$s_email', s_cell = '$s_cell', s_type = '$s_type', s_religion = '$s_religion', s_year = '$s_year', s_past_school = '$s_past',
    m_fname = '$m_fname', m_lname = '$m_lname', m_mname = '$m_mname', m_datebirth = '$m_datebirth', m_age = '$m_age', m_relationship = '$m_relationship', m_religion = '$m_religion', m_address = '$m_address', m_cell = '$m_cell', m_email = '$m_email', m_work = '$m_work',
    f_fname = '$f_fname', f_lname = '$f_lname', f_mname = '$f_mname', f_suffix = '$f_suffix', f_datebirth = '$f_datebirth', f_age = '$f_age', f_relationship = '$f_relationship', f_religion = '$f_religion', f_address = '$f_address', f_cell = '$f_cell', f_email = '$f_email', f_work = '$f_work',
    g_fname = '$g_fname', g_lname = '$g_lname', g_mname = '$g_mname', g_suffix = '$g_suffix', g_datebirth = '$g_datebirth', g_age = '$g_age', g_relationship = '$g_relationship', g_religion = '$g_religion', g_address = '$g_address', g_cell = '$g_cell', g_email = '$g_email', g_work = '$g_work' 
    WHERE id= '$id'";

    if ($conn -> query($sql) === TRUE) {
        echo "

        <script>

        window.alert('Record Update Successfully');
        window.location.href='../admin/dashboard.php';

        </script>

        ";
    } 

    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if (empty($s_fname) || empty($s_lname) || empty($s_mname) || empty($s_datebirth) || empty($s_placebirth) || empty($s_age) || empty($s_relationship) || empty($s_address) || empty($s_course) || empty($s_email) || empty($s_cell) || empty($s_type) || empty($s_religion) || empty($s_year) || empty($s_past) ||
        empty($m_fname) || empty($m_lname) || empty($m_mname) || empty($m_datebirth) || empty($m_age) || empty($m_relationship) || empty($m_address) || empty($m_email) || empty($m_cell) || empty($m_religion) || empty($m_work) ||
        empty($f_fname) || empty($f_lname) || empty($f_mname) || empty($f_datebirth) || empty($f_age) || empty($f_relationship) || empty($f_address) || empty($f_email) || empty($f_cell) || empty($f_religion) || empty($f_work) ||
        empty($g_fname) || empty($g_lname) || empty($g_mname) || empty($g_datebirth) || empty($g_age) || empty($g_relationship) || empty($g_address) || empty($g_email) || empty($g_cell) || empty($g_religion) || empty($g_work)) {
        
        echo "
        <script>
        
            window.alert('All fields are required!');
        
        </script>
        ";
    }
}

?>