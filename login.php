<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Login</title>

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
    <div class="container">
        <img src="images/logo.png" alt="stii_logo">
        <h1>Login</h1>
        
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>

            <p class="top">Don't have account? <a href="register.php">Create Here</a></p>
        </form>
    </div>

    <?php
    require 'server/main.php';
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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
        $result = $conn -> query($sql);

        if ($result -> num_rows === 1) {
            $user_data = $result -> fetch_assoc();
            $_SESSION['username'] = $user_data['username'];
            $_SESSION['user_type'] = $user_data['user'];

            if ($user_data['user'] === 'admin') {
                header('location: admin/dashboard.php'); 
                exit();
            }

            else {
                header('location: dashboard.php');
                exit();
            }
        }

        else {
            echo "
            <script>

            window.alert('Username or Password incorrect');

            </script>
            ";
        }
    }
?>
</body>
</html>