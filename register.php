<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <img src="images/logo.png" alt="stii_logo">
        <h1>Create New Account</h1>

        <form method="post">
            <input type="text" name="firstname" placeholder="First Name" title="Enter your first name" required>
            <input type="text" name="lastname" placeholder="Last Name" title="Enter your last name" required>
            <input type="email" name="email" placeholder="Email" title="Enter your email" required>
            <input type="tel" pattern="^09\d{9}$" name="phone" placeholder="Phone Number" title="Enter your phone number" required>
            <input type="text" name="username" placeholder="Username" title="Enter your username" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit" name="submit" class="down">Create Account</button>

            <p class="top">Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>
    <?php
    require 'server/main.php';
    session_start();

    if(isset($_POST['submit'])) {
        $user_type = 'guest';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if (empty($username) || empty($password) || empty($firstname) || empty($lastname) || empty($email) || empty($phone)) {
            echo "
            
            <script>

            window.alert('All fields are required!');

            </script>

            ";
        }

        $sql = "INSERT INTO users (username, password, user, firstname, lastname, email, cell)
        VALUES ('$username', '$password', '$user_type, '$firstname', '$lastname', '$email', '$phone')";

        if ($conn -> query($sql) === TRUE) {
            echo "

            <script>
            
            window.alert('Account created successfully!');
            window.location.href='login.php';
            
            </script>
            ";
        } 

        else {
            echo "Error: " . $sql . "<br>" . $conn -> error;
        }
    }
    ?>
</body>
</html>