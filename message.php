<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    <link rel="stylesheet" href="css/message.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
    <div class="box">
        <img src="images/logo.png" alt="stii_logo">
            <p>Are you Ready to enroll Sibugay Technical Institute Incorporated?</p>
            <p>Press/Click the <b>"Enroll"</b> button to start</p>

        <form method="post">
            <div class="center">
                <button type="submit" name="enroll">Enroll</button>
            </div>
        </form>
    </div>

    <?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login.php');
        exit();
    }

    if(isset($_POST['enroll'])) {
        header('location: enroll.php');
        exit();
    }
    ?>
</body>
</html>