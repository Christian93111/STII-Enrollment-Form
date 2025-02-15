<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.png">
</head>

<body>
    <form action="../server/update.php" method="post">
        <img src="../images/logo.png" alt="stii_logo">
        <h1>STII Enrollment Database <br> Student Edit Form</h1>

        <table>
            <?php
            require '../server/main.php';

            $id = $_GET['e_id'];
            $sql = "SELECT id, s_fname, s_lname, s_mname, s_suffix, s_datebirth, s_placebirth, s_age, s_relationship, s_address, s_zipcode, s_email, s_cell, s_type, s_religion, p_fname, p_lname, p_mname, p_age, p_suffix, p_relationship, p_religion, p_address, p_zipcode, p_cell, p_email, p_work FROM tbl_fill WHERE id= $id";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
            ?>

            <tr>
                <th colspan="2" style="text-align: center; padding-top: 30px; border: none;"><hr></th>
            </tr>

            <tr>
                <th colspan="2" style="text-align: center; padding-top: 30px; border: none; font-size: 20px;" class="id">You Select Student Enroll Number: <?php echo $row['id']; ?> </th>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; padding: 30px; font-size: 20px;"><b>Student Information:</b></td>
            </tr>

            <tr>
                <td>First Name: <input type="text" placeholder="John" name="s_fname" value="<?php echo $row['s_fname']; ?>" required></td>
                <td>Last Name: <input type="text" placeholder="Doe" name="s_lname" value="<?php echo $row['s_lname']; ?>" required></td>
            </tr>

            <tr>
                <td>Middle Name: <input type="text" placeholder="Cruz" name="s_mname" value="<?php echo $row['s_mname']; ?>" required></td>
                <td>Suffix: 
                    <select name="s_suffix" required>
                        <option value="">Select</option>
                        <option value="None" <?php if ($row['s_suffix'] == 'None') echo 'selected'; ?>>None</option>
                        <option value="JR" <?php if ($row['s_suffix'] == 'JR') echo 'selected'; ?>>Jr</option>
                        <option value="SR" <?php if ($row['s_suffix'] == 'SR') echo 'selected'; ?>>Sr</option>
                        <option value="1st" <?php if ($row['s_suffix'] == '1st') echo 'selected'; ?>>I</option>
                        <option value="2nd" <?php if ($row['s_suffix'] == '2nd') echo 'selected'; ?>>II</option>
                        <option value="3rd" <?php if ($row['s_suffix'] == '3rd') echo 'selected'; ?>>III</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date of Birth: <input type="date" name="s_datebirth" value="<?php echo $row['s_datebirth']; ?>" required></td>
                <td>Place of Birth: <input type="text" placeholder="Zamboanga City" name="s_placebirth" value=" <?php echo $row['s_placebirth']; ?>" required></td>
            </tr>

            <tr>
                <td>Age: <input type="number" min="0" max="100" placeholder="18" name="s_age" value="<?php echo $row['s_age']; ?>" required></td>
                <td>Relationship:
                    <select name="s_relationship" required>
                        <option value="">Select</option>
                        <option value="Single" <?php if ($row['s_relationship'] == 'Single') echo 'selected'; ?>>Single</option>
                        <option value="Married" <?php if ($row['s_relationship'] == 'Married') echo 'selected';?>>Married</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Address: <input type="text" placeholder="Zamboanga City" name="s_address" value="<?php echo $row['s_address']; ?>" required></td>
                <td>Zip Code: <input type="number" min="0" max="9999" placeholder="7000" name="s_zipcode" value="<?php echo $row['s_zipcode']; ?>" required></td>
            </tr>

            <tr>
                <td>Email: <input type="email" placeholder="example@gmail.com" name="s_email" value="<?php echo $row['s_email']; ?>" required></td>
                <td>Cell No. <input type="tel" pattern="^09\d{9}$" placeholder="09########" name="s_cell" value="<?php echo $row['s_cell']; ?>" required></td>
            </tr>

            <tr>
                <td>Type of Student: 
                    <select name="type" required>
                        <option value="">Select</option>
                        <option value="Working" <?php if ($row['s_type'] == 'Working') echo 'selected'; ?>>Working</option>
                        <option value="Full Time" <?php if ($row['s_type'] == 'Full Time') echo 'selected'; ?>>Full Time</option>
                    </select>
                </td>
                <td>Religion: <input type="text" name="s_religion" placeholder="Catholic" value="<?php echo $row['s_religion']; ?>" required></td>
            </tr>

            <tr>
                <th colspan="2" style="text-align: center; padding-top: 30px; border: none;"><hr></th>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; padding: 30px; font-size: 20px;"><b>Parent/Guardian Information:</b></td>
            </tr>

            <tr>
                <td>First Name: <input type="text" placeholder="John" name="p_fname" value="<?php echo $row['p_fname']; ?>" required></td>
                <td>Last Name: <input type="text" placeholder="Doe" name="p_lname" value="<?php echo $row['p_lname']; ?>" required></td>
            </tr>

            <tr>
                <td>Middle Name: <input type="text" placeholder="Cruz" name="p_mname" value="<?php echo $row['p_mname']; ?>" required></td>
                <td>Age: <input type="number" min="0" max="100" placeholder="30" name="p_age" value="<?php echo $row['p_age']; ?>" required></td>
            </tr>

            <tr>
                <td>Suffix:
                    <select name="p_suffix" required>
                        <option value="">Select</option>
                        <option value="None" <?php if ($row['p_suffix'] == 'None') echo 'selected'; ?>>None</option>
                        <option value="JR" <?php if ($row['p_suffix'] == 'JR') echo 'selected'; ?>>JR</option>
                        <option value="SR" <?php if ($row['p_suffix'] == 'SR') echo 'selected'; ?>>SR</option>
                        <option value="1st" <?php if ($row['p_suffix'] == '1st') echo 'selected'; ?>>1st</option>
                        <option value="2nd" <?php if ($row['p_suffix'] == '2nd') echo 'selected'; ?>>2nd</option>
                        <option value="3rd" <?php if ($row['p_suffix'] == '3rd') echo 'selected'; ?>>3rd</option>
                    </select>
                </td>
                <td>Relationship:
                    <select name="p_relationship" required>
                        <option value="">Select</option>
                        <option value="Single" <?php if ($row['p_relationship'] == 'Single') echo 'selected'; ?>>Single</option>
                        <option value="Married" <?php if ($row['p_relationship'] == 'Married') echo 'selected'; ?>>Married</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Religion: <input type="text" placeholder="Catholic" name="p_religion" value="<?php echo $row['p_religion']; ?>" required></td>
                <td>Address: <input type="text" placeholder="Zamboanga City" name="p_address" value="<?php echo $row['p_address']; ?>" required></td>
            </tr>

            <tr>
                <td>Zip Code: <input type="number" placeholder="7000" name="p_zipcode" value="<?php echo $row['p_zipcode']; ?>" required></td>
                <td>Cell No. <input type="tel" pattern="^09\d{9}$" placeholder="09########" name="p_cell" value="<?php echo $row['p_cell']; ?>" required></td>
            </tr>

            <tr>
                <td>Email: <input type="email" placeholder="example@gmail.com" name="p_email" value="<?php echo $row['p_email']; ?>" required></td>
                <td>Occupation: <input type="text" placeholder="Government Work" name="p_work" value="<?php echo $row['p_work']; ?>" required></td>
            </tr>
            
            <tr>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <td colspan="2" class="btn-center" style="padding-top: 50px;"><button type="submit" name="update">Update</button></td>
            </tr>

            <tr>
                <td colspan="2" class="btn-center"><button type="button" onclick="window.location.href='database.php'">Back</button></td>
            </tr>

            <?php
                }
            }
            ?>
        </table>
    </form>
</body>
</html>