<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/message.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
    <div class="box">
        <img src="images/logo.png" alt="stii_logo">
            <h1>Welcome to Sibugay Techinical Institute Incorporated</h1>
            <p>Before you enroll as a college student, we required to create or login your account</p>
            <p>Press/Click the <b>"Begin"</b> button to start</p>

            <form method="post">
                <div class="center">
                    <button type="submit" name="start">Begin</button>
                </div>
            </form>

            <?php 
            session_start();

            if (isset($_SESSION['username'])) {
                if ($_SESSION['user_type'] === 'admin') {
                    header('Location: admin/dashboard.php');
                    exit();
                }

                else {
                    header('Location: dashboard.php');
                }
            }
            if (isset($_POST['start'])) {
                header('location: login.php');
            }
            ?>
    </div>
</body>
</html>