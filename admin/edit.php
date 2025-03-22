<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Form</title>
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="shortcut icon" href="../images/logo.png">

</head>

<body>
    <form method="post">
        <img src="../images/logo.png" alt="stii_logo">
        <h1>STII Student College Enrollment Database <br> Student Edit Form</h1>

        <?php
            require '../server/main.php';
            require '../server/update.php';
            session_start();

            if (!isset($_SESSION['username'])) {
                header('location: ../login.php');
                exit();
            }

            $id = $_GET['e_id'];
            $sql = "SELECT * FROM tbl_fill WHERE id= $id";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
            ?>

        <table>

            <tr>
                <th colspan="2" style="text-align: center; padding-top: 30px; border: none; font-size: 20px;" class="id">You Select Student Enroll Number (ID): <?php echo $row['id']; ?> </th>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; padding: 30px; font-size: 20px;"><b>Student Information</b></td>
            </tr>

            <tr>
                <td>First Name <input type="text" name="s_fname" value="<?php echo $row['s_fname']; ?>" required></td>
                <td>Last Name <input type="text" name="s_lname" value="<?php echo $row['s_lname']; ?>" required></td>
            </tr>

            <tr>
                <td>Middle Name <input type="text" name="s_mname" value="<?php echo $row['s_mname']; ?>" required></td>
                <td>Suffix 
                    <select name="s_suffix" required>
                        <option value="">Select</option>
                        <option value="None" <?php if ($row['s_suffix'] == 'None') echo 'selected'; ?>>None</option>
                        <option value="Sr" <?php if ($row['s_suffix'] == 'Sr') echo 'selected'; ?>>Sr</option>
                        <option value="Jr" <?php if ($row['s_suffix'] =='Jr') echo 'selected'; ?>>Jr</option>
                        <option value="I" <?php if ($row['s_suffix'] == 'I') echo 'selected'; ?>>I</option>
                        <option value="II" <?php if ($row['s_suffix'] == 'II') echo 'selected'; ?>>II</option>
                        <option value="III" <?php if ($row['s_suffix'] == 'III') echo 'selected'; ?>>III</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date of Birth <input type="date" name="s_datebirth" value="<?php echo $row['s_datebirth']; ?>" required></td>
                <td>Place of Birth <input type="text" name="s_placebirth" value=" <?php echo $row['s_placebirth']; ?>" required></td>
            </tr>

            <tr>
                <td>Age <input type="number" min="0" max="100" name="s_age" value="<?php echo $row['s_age']; ?>" required></td>
                <td>Relationship Status
                    <select name="s_relationship" required>
                        <option value="">Select</option>
                        <option value="Single" <?php if ($row['s_relationship'] == 'Single') echo 'selected'; ?>>Single</option>
                        <option value="Married" <?php if ($row['s_relationship'] == 'Married') echo 'selected';?>>Married</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Full Address <input type="text" name="s_address" value="<?php echo $row['s_address']; ?>" required></td>
                <td>Course
                    <select name="s_course" required>
                        <option value="">Select</option>
                        <option value="BSSW" <?php if ($row['s_course'] == 'BSSW') echo 'selected'; ?> >Bachelor of Science in Social Work</option>
                        <option value="BSBA" <?php if ($row['s_course'] == 'BSMA') echo 'selected'; ?> >Bachelor of Multimedia Arts</option>
                        <option value="BSMW" <?php if ($row['s_course'] == 'BSMW') echo 'selected'; ?> >Bachelor of Science in Midwifery</option>
                        <option value="BSCRIM" <?php if ($row['s_course'] == 'BSCRIM') echo 'selected'; ?> >Bachelor of Science in Criminology</option>
                        <option value="BSBA" <?php if ($row['s_course'] == 'BSBA') echo 'selected'; ?> >Bachelor of Science in Business Administration</option>
                        <option value="BSHM" <?php if ($row['s_course'] == 'BSHM') echo 'selected'; ?> >Bachelor of Science in Hospitality Management</option>
                        <option value="BSCS" <?php if ($row['s_course'] == 'BSCS') echo 'selected'; ?> >Bachelor of Science in Computer Science</option>
                        <option value="BSIT" <?php if ($row['s_course'] == 'BSIT') echo 'selected'; ?> >Bachelor of Science in Information Technology</option>
                        <option value="BTVTED" <?php if ($row['s_course'] == 'BTVTED') echo 'selected'; ?> >Bachelor of Technical Vocational Teachers Education</option>
                        <option value="BSAGRI" <?php if ($row['s_course'] == 'BSAGRI') echo 'selected'; ?> >Bachelor of Science And Agriculture</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Email <input type="email" name="s_email" value="<?php echo $row['s_email']; ?>" required></td>
                <td>Cell No. <input type="tel" pattern="^09\d{9}$" name="s_cell" value="<?php echo $row['s_cell']; ?>" required></td>
            </tr>

            <tr>
                <td>Type of Student 
                    <select name="type" required>
                        <option value="">Select</option>
                        <option value="Working" <?php if ($row['s_type'] == 'Working') echo 'selected'; ?>>Working</option>
                        <option value="Full Time" <?php if ($row['s_type'] == 'Full Time') echo 'selected'; ?>>Full Time</option>
                    </select>
                </td>
                <td>Religion <input type="text" name="s_religion" value="<?php echo $row['s_religion']; ?>" required></td>
            </tr>

            <tr>
                <td>Year Level
                    <select name="s_year" required>
                        <option value="">Select</option>
                        <option value="1st Year" <?php if ($row['s_year'] == '1st Year') echo 'selected'; ?>>1st Year</option>
                        <option value="2nd Year" <?php if ($row['s_year'] == '2nd Year') echo 'selected'; ?>>2nd Year</option>
                        <option value="3rd Year" <?php if ($row['s_year'] == '3rd Year') echo 'selected'; ?>>3rd Year</option>
                        <option value="4th Year" <?php if ($row['s_year'] == '4th Year') echo 'selected'; ?>>4th Year</option>
                    </select>
                </td>
                <td>What School Graduated? <b>(Enter Full School Name)</b><input type="text" name="s_past_school" value="<?php echo $row['s_past_school']; ?>" required></td>
            </tr>

            <tr>
                <th colspan="2" style="text-align: center; padding-top: 30px; border: none;"><hr></th>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; padding: 30px; font-size: 20px;"><b>Mother Information</b></td>
            </tr>

            <tr>
                <td>First Name <input type="text" name="m_fname" value="<?php echo $row['m_fname']; ?>" required></td>
                <td>Last Name <input type="text" name="m_lname" value="<?php echo $row['m_lname']; ?>" required></td>
            </tr>

            <tr>
                <td>Middle Name <input type="text" name="m_mname" value="<?php echo $row['m_mname']; ?>" required></td>
                <td>Date of Birth <input type="date" name="m_datebirth" value="<?php echo $row['m_datebirth']; ?>" required></td>
            </tr>

            <tr>
                <td>Age <input type="number" min="0" max="100" name="m_age" value="<?php echo $row['m_age']; ?>" required></td>
                <td>Relationship Status
                    <select name="m_relationship" required>
                        <option value="">Select</option>
                        <option value="Single" <?php if ($row['m_relationship'] == 'Single') echo 'selected'; ?>>Single</option>
                        <option value="Married" <?php if ($row['m_relationship'] == 'Married') echo 'selected'; ?>>Married</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Religion <input type="text" name="m_religion" value="<?php echo $row['m_religion']; ?>" required></td>
                <td>Address <input type="text" name="m_address" value="<?php echo $row['m_address']; ?>" required></td>
            </tr>

            <tr>
                <td>Cell No. <input type="tel" pattern="^09\d{9}$" name="m_cell" value="<?php echo $row['m_cell']; ?>" required></td>
                <td>Email <input type="email" name="m_email" value="<?php echo $row['m_email']; ?>" required></td>
            </tr>

            <tr>
                <td>Occupation <input type="text" name="m_work" value="<?php echo $row['m_work']; ?>" required></td>
            </tr>

            <tr>
                <th colspan="2" style="text-align: center; padding-top: 30px; border: none;"><hr></th>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; padding: 30px; font-size: 20px;"><b>Father Information</b></td>
            </tr>

            <tr>
                <td>First Name <input type="text" name="f_fname" value="<?php echo $row['f_fname']; ?>" required></td>
                <td>Last Name <input type="text" name="f_lname" value="<?php echo $row['f_lname']; ?>" required></td>
            </tr>

            <tr>
                <td>Middle Name: <input type="text" name="f_mname" value="<?php echo $row['f_mname']; ?>" required></td>
                <td>Suffix
                    <select name="f_suffix" required>
                        <option value="">Select</option>
                        <option value="None" <?php if ($row['f_suffix'] == 'None') echo 'selected'; ?>>None</option>
                        <option value="Sr" <?php if ($row['f_suffix'] == 'Sr') echo 'selected'; ?>>Sr</option>
                        <option value="Jr" <?php if ($row['f_suffix'] == 'Jr') echo 'selected'; ?>>Jr</option>
                        <option value="I" <?php if ($row['f_suffix'] == 'I') echo 'selected'; ?>>I</option>
                        <option value="II" <?php if ($row['f_suffix'] == 'II') echo 'selected'; ?>>II</option>
                        <option value="III" <?php if ($row['f_suffix'] == 'III') echo 'selected'; ?>>III</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date of Birth <input type="date" name="f_datebirth" value="<?php echo $row['f_datebirth']; ?>" required></td>
                <td>Age <input type="number" min="0" max="100" name="f_age" value="<?php echo $row['f_age']; ?>" required></td>
            </tr>
            
            <tr>
                <td>Relationship Status
                    <select name="f_relationship" required>
                        <option value="">Select</option>
                        <option value="Single" <?php if ($row['f_relationship'] == 'Single') echo 'selected'; ?>>Single</option>
                        <option value="Married" <?php if ($row['f_relationship'] == 'Married') echo 'selected'; ?>>Married</option>
                    </select>
                </td>
                <td>Religion <input type="text" name="f_religion" value="<?php echo $row['f_religion']; ?>" required></td>
            </tr>

            <tr>
                <td>Full Address <input type="text" name="f_address" value="<?php echo $row['f_address']; ?>" required></td>
                <td>Cell No. <input type="tel" pattern="^09\d{9}$" name="f_cell" value="<?php echo $row['f_cell']; ?>" required></td>
            </tr>

            <tr>
                <td>Email <input type="email" name="f_email" value="<?php echo $row['f_email']; ?>" required></td>
                <td>Occupation <input type="text" name="f_work" value="<?php echo $row['f_work']; ?>" required></td>
            </tr>

            <tr>
                <th colspan="2" style="text-align: center; padding-top: 30px; border: none;"><hr></th>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; padding: 30px; font-size: 20px;"><b>Guardian Information (Optional)</b></td>
            </tr>

            <tr>
                <td>First Name <input type="text" name="g_fname" value="<?php echo $row['g_fname']; ?>"></td>
                <td>Last Name <input type="text" name="g_lname" value="<?php echo $row['g_lname']; ?>"></td>
            </tr>

            <tr>
                <td>Middle Name <input type="text" name="g_mname" value="<?php echo $row['g_mname']; ?>"></td>
                <td>Suffix
                    <select name="g_suffix">
                        <option value="">Select</option>
                        <option value="None" <?php if ($row['g_suffix'] == 'None') echo 'selected'; ?>>None</option>
                        <option value="Sr" <?php if ($row['g_suffix'] == 'Sr') echo 'selected'; ?>>Sr</option>
                        <option value="Jr" <?php if ($row['g_suffix'] == 'Jr') echo 'selected'; ?>>Jr</option>
                        <option value="I" <?php if ($row['g_suffix'] == 'I') echo 'selected'; ?>>I</option>
                        <option value="II" <?php if ($row['g_suffix'] == 'II') echo 'selected'; ?>>II</option>
                        <option value="III" <?php if ($row['g_suffix'] == 'III') echo 'selected'; ?>>III</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date of Birth <input type="date" name="g_datebirth" value="<?php echo $row['g_datebirth']; ?>"></td>
                <td>Age <input type="number" min="0" max="100" name="g_age" value="<?php echo $row['g_age']; ?>"></td>
            </tr>
            
            <tr>
                <td>Relationship
                    <select name="g_relationship">
                        <option value="">Select</option>
                        <option value="Single" <?php if ($row['g_relationship'] == 'Single') echo 'selected'; ?>>Single</option>
                        <option value="Married" <?php if ($row['g_relationship'] == 'Married') echo 'selected'; ?>>Married</option>
                    </select>
                </td>
                <td>Religion <input type="text" name="g_religion" value="<?php echo $row['g_religion']; ?>"></td>
            </tr>

            <tr>
                <td>Full Address <input type="text" name="g_address" value="<?php echo $row['g_address']; ?>"></td>
                <td>Cell No. <input type="tel" pattern="^09\d{9}$" name="g_cell" value="<?php echo $row['g_cell']; ?>"></td>
            </tr>

            <tr>
                <td>Email <input type="email" name="g_email" value="<?php echo $row['g_email']; ?>"></td>
                <td>Occupation <input type="text" name="g_work" value="<?php echo $row['g_work']; ?>"></td>
            </tr>
            
            </table>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" name="update">Update</button></td>
            <button type="button" onclick="window.location.href='dashboard.php'">Back</button></td>

            <?php
                }
            }
            ?>
    </form>
</body>
</html>