<?php
    require 'server/submit.php';
    session_start();

    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
        exit();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/logo.png">

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

    <form method="post">
        <img src="images/logo.png" alt="stii_logo">
        <h1>STII Student College Enrollment Form</h1>

        <table>
            <tr>
                <td colspan="2" style="text-align: center; padding: 30px; font-size: 20px;"><b>Student Information:</b></td>
            </tr>

            <tr>
                <td>First Name <input type="text" name="s_fname" required></td>
                <td>Last Name <input type="text" name="s_lname" required></td>
            </tr>

            <tr>
                <td>Middle Name <input type="text" name="s_mname" required></td>
                <td>Suffix 
                    <select name="s_suffix" required>
                        <option value="">Select</option>
                        <option value="None">None</option>
                        <option value="Sr">Sr</option>
                        <option value="Jr">Jr</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date of Birth <input type="date" name="s_datebirth" required></td>
                <td>Place of Birth <input type="text" name="s_placebirth" required></td>
            </tr>

            <tr>
                <td>Age <input type="number" min="0" max="100" name="s_age" required></td>
                <td>Relationship Status
                    <select name="s_relationship" required>
                        <option value="">Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Full Address <input type="text" name="s_address" required></td>
                <td>Course
                    <select name="s_course" required>
                        <option value="">Select</option>
                        <option value="BSSW">Bachelor of Science in Social Work</option>
                        <option value="BSMA">Bachelor of Multimedia Arts</option>
                        <option value="BSMW">Bachelor of Science in Midwifery</option>
                        <option value="BSCRIM">Bachelor of Science in Criminology</option>
                        <option value="BSBA">Bachelor of Science in Business Administration</option>
                        <option value="BSHM">Bachelor of Science in Hospitality Management</option>
                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                        <option value="BSIT">Bachelor of Science in Information Technology</option>
                        <option value="BTVTED">Bachelor of Technical Vocational Teachers Education</option>
                        <option value="BSAGRI">Bachelor of Science And Agriculture</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Email <input type="email" name="s_email" required></td>
                <td>Cell No. <input type="tel" pattern="^09\d{9}$" name="s_cell" required></td>
            </tr>

            <tr>
                <td>Type of Student 
                    <select name="type" required>
                        <option value="">Select</option>
                        <option value="Working">Working</option>
                        <option value="Full Time">Full Time</option>
                    </select>
                </td>
                <td>Religion <input type="text" name="s_religion" required></td>
            </tr>

            <tr>
                <td>Year Level
                    <select name="s_year" required>
                        <option value="">Select</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                    </select>
                </td>
                <td>What School Graduated? <b>(Enter Full School Name)</b><input type="text" name="s_past_school" required></td>
            </tr>

            <tr>
                <th colspan="2" style="text-align: center; padding-top: 30px; border: none;"><hr></th>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; padding: 30px; font-size: 20px;"><b>Mother Information:</b></td>
            </tr>

            <tr>
                <td>First Name <input type="text" name="m_fname" required></td>
                <td>Last Name <input type="text" name="m_lname" required></td>
            </tr>

            <tr>
                <td>Middle Name <input type="text" name="m_mname" required></td>
                <td>Date of Birth <input type="date" name="m_datebirth" required></td>
            </tr>

            <tr>
                <td>Age <input type="number" min="0" max="100" name="m_age" required></td>
                <td>Relationship Status
                    <select name="m_relationship" required>
                        <option value="">Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Full Address <input type="text" name="m_address" required></td>
                <td>Email <input type="email" name="m_email" required></td>
            </tr>

            <tr>
                <td>Cell No. <input type="tel" pattern="^09\d{9}$" name="m_cell" required></td>
                <td>Religion <input type="text" name="m_religion" required></td>
            </tr>

            <tr>
                <td>Occupation <input type="text" name="m_work" required></td>
            </tr>

            <tr>
                <th colspan="2" style="text-align: center; padding-top: 30px; border: none;"><hr></th>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; padding: 30px; font-size: 20px;"><b>Father Information:</b></td>
            </tr>

            <tr>
                <td>First Name <input type="text" name="f_fname" required></td>
                <td>Last Name <input type="text" name="f_lname" required></td>
            </tr>

            <tr>
                <td>Middle Name <input type="text" name="f_mname" required></td>
                <td>Suffix 
                    <select name="f_suffix" required>
                        <option value="">Select</option>
                        <option value="None">None</option>
                        <option value="Sr">Sr</option>
                        <option value="Jr">Jr</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date of Birth <input type="date" name="f_datebirth" required></td>
                <td>Age <input type="number" min="0" max="100" name="f_age" required></td>
            </tr>
            
            <tr>
                <td>Relationship Status
                    <select name="f_relationship" required>
                        <option value="">Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                </td>
                <td>Full Address <input type="text" name="f_address" required></td>
            </tr>

            <tr>
                <td>Email <input type="email" name="f_email" required></td>
                <td>Cell No. <input type="tel" pattern="^09\d{9}$" name="f_cell" required></td>
            </tr>

            <tr>
                <td>Religion <input type="text" name="f_religion" required></td>
                <td>Occupation <input type="text" name="f_work" required></td>
            </tr>

            <tr>
                <th colspan="2" style="text-align: center; padding-top: 30px; border: none;"><hr></th>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; padding: 30px; font-size: 20px;"><b>Guardian Information (Optional):</b></td>
            </tr>

            <tr>
                <td>First Name <input type="text" name="g_fname"></td>
                <td>Last Name <input type="text" name="g_lname"></td>
            </tr>

            <tr>
                <td>Middle Name <input type="text" name="g_mname"></td>
                <td>Suffix 
                    <select name="g_suffix">
                        <option value="">Select</option>
                        <option value="None">None</option>
                        <option value="Sr">Sr</option>
                        <option value="Jr">Jr</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date of Birth <input type="date" name="g_datebirth"></td>
                <td>Age <input type="number" min="0" max="100" name="g_age"></td>
            </tr>
            
            <tr>
                <td>Relationship
                    <select name="g_relationship">
                        <option value="">Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                </td>
                <td>Address <input type="text" name="g_address"></td>
            </tr>

            <tr>
                <td>Email <input type="email" name="g_email"></td>
                <td>Cell No. <input type="tel" pattern="^09\d{9}$" name="g_cell"></td>
            </tr>

            <tr>
                <td>Religion <input type="text" name="g_religion"></td>
                <td>Occupation <input type="text" name="g_work"></td>
            </tr>

        </table>

        <button type="submit" name="submit">Submit</button>
        <button onclick="window.location.href='dashboard.php'">Back</button>
    </form>
</body>
</html>