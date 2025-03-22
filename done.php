<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STII Enrollment Form</title>
    <link rel="stylesheet" href="css/message.css">
    <link rel="shortcut icon" href="images/logo.png">
</head>
<body>
    <div class="box">
        <img src="images/logo.png" alt="stii_logo">
        <h1>Form Submitted!</h1>
        <p>Thank you Enrolling <b>Sibugay Technical Institute Inc.<b></p>
        <p>We will send an email with details about the schedule and steps to officially complete your enrollment at STII.</p>
        <p>Our student portal will added soon, providing a gateway to enhanced learning resources.</p>        

        <form method="post">
            <div class="center">
                <button type="submit" name="done">Done</button>
            </div>
        </form>
    </div>

    <?php 
        session_start();

        if (!isset($_SESSION['username'])) {
            header('location: login.php');
            exit();
        }

        if (isset($_POST['done'])) {
            header('location: dashboard.php');
            exit();
        }
    ?>
</body>
</html>