<?php
    require 'server/main.php';
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Dashboard</title>

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
    <header>
        <img src="images/logo.png" alt="logo">
        <h2>Student Portal</h2>
        <nav>
            <ul>
                <li><a href="message.php">Enroll</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="container">
        <h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>

        <div class="card">
            <div class="card-header">
                <h3>Important Dates & Announcements</h3>
            </div>

            <div class="card-body">
                <p><strong>Starting Enrollment:</strong> March 21, 2025</p>
                <p><strong>Starting Class:</strong> April 5, 2025</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Coming Soon</h3>
            </div>

            <div class="card-body">
                <p>New features are on the way! For now, please make sure to enroll. If you're already enrolled, simply wait for the email confirmation we've sent to you, and follow the instructions Thank you.</p>
            </div>
        </div>

    </main>
</body>
</html>