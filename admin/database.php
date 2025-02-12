<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="../css/database.css">
    <link rel="shortcut icon" href="../images/logo.png">
</head>

<body>
    <div class="top">
        <img src="../images/logo.png" alt="stii_logo">
        <h1>STII Enrollment Database</h1>
    </div>

    <table>
        <?php
        require '../server/main.php';
        
        $sql = "SELECT id, s_fname, s_lname, s_mname, s_suffix, s_datebirth, s_placebirth, s_age, s_relationship, s_address, s_zipcode, s_email, s_cell, s_type, s_religion, p_fname, p_lname, p_mname, p_age, p_suffix, p_relationship, p_religion, p_address, p_zipcode, p_cell, p_email, p_work FROM tbl_fill";
        $result = $conn -> query($sql);

        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
        ?>

        <tr>
            <th colspan="2" style="text-align: center; padding-top: 30px; border: none;"><hr></th>
        </tr>

        <tr>
            <th colspan="2" style="text-align: center; padding-top: 30px; border: none; font-size: 20px;" class="id">Student Enroll Number: <?php echo $row['id']; ?> </th>
        </tr>

        <tr>
            <th colspan="2" style="text-align: center; border: none; padding: 30px; font-size: 20px;"><b>Student Information:</b</th>
        </tr>

        <tr>
            <td>First Name: <b> <?php echo $row['s_fname']; ?> </b> </td>
            <td>Last Name: <b> <?php echo $row['s_lname']; ?></b> </td>
        </tr>

        <tr>
            <td>Middle Name: <b> <?php echo $row['s_mname']; ?></b> </td>
            <td>Suffix: <b> <?php echo $row['s_suffix']; ?></b> </td>
        </tr>

        <tr>
            <td>Date of Birth: <b> <?php echo $row['s_datebirth']; ?></b> </td>
            <td>Place of Birth: <b> <?php echo $row['s_placebirth']; ?></b> </td>
        </tr>

        <tr>
            <td>Age: <b> <?php echo $row['s_age']; ?></b></td>
            <td>Relationship: <b> <?php echo $row['s_relationship']; ?></b> </td>
        </tr>

        <tr>
            <td>Address: <b> <?php echo $row['s_address']; ?></b> </td>
            <td>Zip Code: <b> <?php echo $row['s_zipcode']; ?></b> </td>
        </tr>

        <tr>
            <td>Email: <b> <?php echo $row['s_email']; ?></b> </td>
            <td>Cell No: <b> <?php echo $row['s_cell']; ?></b> </td>
        </tr>

        <tr>
            <td>Type of Student: <b> <?php echo $row['s_type']; ?></b> </td>
            <td>Religion: <b> <?php echo $row['s_religion']; ?></b> </td>
        </tr>

        <tr>
            <th colspan="2" style="text-align: center; padding-top: 30px; border: none;"><hr></th>
        </tr>

        <tr>
            <th colspan="2" style="text-align: center; border: none; padding: 30px; font-size: 20px;"><b>Parent/Guardian Information:</b></th>
        </tr>

        <tr>
            <td>First Name: <b> <?php echo $row['p_fname']; ?> </b> </td>
            <td>Last Name: <b> <?php echo $row['p_lname']; ?> </b> </td>
        </tr>

        <tr>
            <td>Middle Name: <b> <?php echo $row['p_mname']; ?> </b> </td>
            <td>Age: <b> <?php echo $row['p_age']; ?> </b> </td>
        </tr>

        <tr>
            <td>Suffix: <b> <?php echo $row['p_suffix']; ?> </b> </td>
            <td>Relationship: <b> <?php echo $row['p_relationship']; ?> </b> </td>
        </tr>

        <tr>
            <td>Religion: <b> <?php echo $row['p_religion']; ?> </b> </td>
            <td>Address: <b> <?php echo $row['p_address']; ?> </b> </td>
        </tr>

        <tr>
            <td>Zip Code: <b> <?php echo $row['p_zipcode']; ?> </b> </td>
            <td>Cell No: <b> <?php echo $row['p_cell']; ?> </b> </td>
        </tr>

        <tr>
            <td>Email: <b> <?php echo $row['p_email']; ?> </b> </td>
            <td>Occupation: <b> <?php echo $row['p_work']; ?> </b> </td>
        </tr>

        <form action="../server/delete.php" method="get">
            <input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
            <tr>
                <td colspan="2" class="btn-center" style="padding-top: 50px;"><button type="submit" onclick="window.location.href='?id='">Delete</button></td>
            </tr>
        </form>

        <form action="edit.php" method="get">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <tr>
                <td colspan="2" class="btn-center"><button type="submit" onclick="window.location.href='?id='">Edit</button></td>
            </tr>
        </form>

        <tr>
            <td colspan="2" class="btn-center"><button type="button" onclick="window.location.href='../index.html'">Back</button></td>
        </tr>

        <?php
            }
        }
        ?>
    </table>
</body>
</html>