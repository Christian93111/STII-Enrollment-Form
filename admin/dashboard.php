<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="../css/database.css">
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript">

        function preventBack() {
            window.history.forward();
        }

        setTimeout("preventBack()", 0);
        window.onunload=function() {
            null;
        }

    </script>

</head>
<body>
    <div class="top">
        <img src="../images/logo.png" alt="stii_logo">
        <h1>STII Student College Enrollment Database</h1>
    </div>

    <?php
        require '../server/main.php';
        require '../server/delete.php';
        session_start();

        if (!isset($_SESSION['username'])) {
            header('Location: ../login.php');
            exit();
        }

        if (isset($_POST['add'])) {
            header('location: add.php');
            exit();
        }

        if (isset($_POST['logout'])) {
            session_unset();
            session_destroy();
            header("Location: ../login.php");
            exit();
        }

        $search = "";
        if (isset($_POST['search']) && !empty($_POST['search'])) {
            $search = $_POST['search'];
            $sql = "SELECT * FROM tbl_fill WHERE s_fname LIKE '%$search%' OR s_lname LIKE '%$search%' OR s_email LIKE '%$search%' OR s_course LIKE '%$search%' OR m_fname LIKE '%$search%' OR m_lname LIKE '%$search%' OR f_fname LIKE '%$search%' OR f_lname LIKE '%$search%' OR g_fname LIKE '%$search%' OR g_lname LIKE '%$search%'";
        }

        else {
            $sql = "SELECT * FROM tbl_fill";
        }

        $result = $conn->query($sql);
    ?>

    <div class="records">
        <h1>Records</h1>
        <form method="post">
            <input type="text" name="search" class="search-bar" placeholder="Search..." value="<?php echo htmlspecialchars($search); ?>">
            <button type="submit" class="btn-blue"><i class="fa fa-search"></i> Search</button>
            <button class="btn-green" name="add"><i class="fa fa-plus"></i> Add New Student</button>
            <button class="btn-red" name="logout"><i class="fa fa-sign-out"></i> Logout</button>
        </form>
    </div>
    
    <div class="container">
        <table>
            <tr>
                <th colspan="2">Action</th>
                <th>#</th>
                <th>Student First Name</th>
                <th>Student Last Name</th>
                <th>Student Middle Name</th>
                <th>Suffix</th>
                <th>Date of Birth</th>
                <th>Place of Birth</th>
                <th>Age</th>
                <th>Relationship Status</th>
                <th>Full Address</th>
                <th>Course</th>
                <th>Email</th>
                <th>Cell No.</th>
                <th>Type of Student</th>
                <th>Religion</th>
                <th>Year Level</th>
                <th>Previous School</th>
                <th>Mother First Name</th>
                <th>Mother Last Name</th>
                <th>Mother Middle Name</th>
                <th>Mother Date of Birth</th>
                <th>Mother Age</th>
                <th>Mother Relationship Status</th>
                <th>Mother Address</th>
                <th>Mother Email</th>
                <th>Mother Cell No.</th>
                <th>Mother Religion</th>
                <th>Mother Occupation</th>
                <th>Father First Name</th>
                <th>Father Last Name</th>
                <th>Father Middle Name</th>
                <th>Father Suffix</th>
                <th>Father Date of Birth</th>
                <th>Father Age</th>
                <th>Father Relationship Status</th>
                <th>Father Address</th>
                <th>Father Email</th>
                <th>Father Cell No.</th>
                <th>Father Religion</th>
                <th>Father Occupation</th>
                <th>Guardian First Name</th>
                <th>Guardian Last Name</th>
                <th>Guardian Middle Name</th>
                <th>Guardian Suffix</th>
                <th>Guardian Date of Birth</th>
                <th>Guardian Age</th>
                <th>Guardian Relationship Status</th>
                <th>Guardian Address</th>
                <th>Guardian Email</th>
                <th>Guardian Cell No.</th>
                <th>Guardian Religion</th>
                <th>Guardian Occupation</th>
            </tr>
            <?php 
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><button onclick="window.location.href='edit.php?e_id=<?php echo $row['id']; ?>'" class="btn-orange"><i class="fa fa-edit"></i></button></td>
                        <td>
                            <form method="get">
                                <input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="btn-red"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['s_fname']; ?> </td>
                        <td> <?php echo $row['s_lname']; ?> </td>
                        <td> <?php echo $row['s_mname']; ?> </td>
                        <td> <?php echo $row['s_suffix']; ?> </td>
                        <td> <?php echo $row['s_datebirth']; ?> </td>
                        <td> <?php echo $row['s_placebirth']; ?> </td>
                        <td> <?php echo $row['s_age']; ?> </td>
                        <td> <?php echo $row['s_relationship']; ?> </td>
                        <td> <?php echo $row['s_address']; ?> </td>
                        <td> <?php echo $row['s_course']; ?> </td>
                        <td> <?php echo $row['s_email']; ?> </td>
                        <td> <?php echo $row['s_cell']; ?> </td>
                        <td> <?php echo $row['s_type']; ?> </td>
                        <td> <?php echo $row['s_religion']; ?> </td>
                        <td> <?php echo $row['s_year']; ?> </td>
                        <td> <?php echo $row['s_past_school']; ?> </td>

                        <td> <?php echo $row['m_fname']; ?> </td>
                        <td> <?php echo $row['m_lname']; ?> </td>
                        <td> <?php echo $row['m_mname']; ?> </td>
                        <td> <?php echo $row['m_datebirth']; ?> </td>
                        <td> <?php echo $row['m_age']; ?> </td>
                        <td> <?php echo $row['m_relationship']; ?> </td>
                        <td> <?php echo $row['m_address']; ?> </td>
                        <td> <?php echo $row['m_email']; ?> </td>
                        <td> <?php echo $row['m_cell']; ?> </td>
                        <td> <?php echo $row['m_religion']; ?> </td>
                        <td> <?php echo $row['m_work']; ?></td>

                        <td> <?php echo $row['f_fname']; ?> </td>
                        <td> <?php echo $row['f_lname']; ?> </td>
                        <td> <?php echo $row['f_mname']; ?> </td>
                        <td> <?php echo $row['f_suffix']; ?> </td>
                        <td> <?php echo $row['f_datebirth']; ?> </td>
                        <td> <?php echo $row['f_age']; ?> </td>
                        <td> <?php echo $row['f_relationship']; ?> </td>
                        <td> <?php echo $row['f_address']; ?> </td>
                        <td> <?php echo $row['f_email']; ?> </td>
                        <td> <?php echo $row['f_cell']; ?> </td>
                        <td> <?php echo $row['f_religion']; ?> </td>
                        <td> <?php echo $row['f_work']; ?></td>

                        <td> <?php echo $row['g_fname']; ?> </td>
                        <td> <?php echo $row['g_lname']; ?> </td>
                        <td> <?php echo $row['g_mname']; ?> </td>
                        <td> <?php echo $row['g_suffix']; ?> </td>
                        <td> <?php echo $row['g_datebirth']; ?> </td>
                        <td> <?php echo $row['g_age']; ?> </td>
                        <td> <?php echo $row['g_relationship']; ?> </td>
                        <td> <?php echo $row['g_address']; ?> </td>
                        <td> <?php echo $row['g_email']; ?> </td>
                        <td> <?php echo $row['g_cell']; ?> </td>
                        <td> <?php echo $row['g_religion']; ?> </td>
                        <td> <?php echo $row['g_work']; ?> </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
