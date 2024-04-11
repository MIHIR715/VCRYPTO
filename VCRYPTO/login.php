<?php
$servername = "127.0.0.1:3306"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "EVILS15";
$dbname = "vcrypto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Password is correct, check if user is admin
            if ($row['is_admin'] == 1) {
                // Admin user, redirect to dashboard.php
                header("Location: dashboard.php");
                exit();
            } else {
                // Regular user, redirect to user.php
                header("Location: user.php");
                exit();
            }
        } else {
            echo "<div class='error-message'>Invalid username or password</div>";
        }
    } else {
        echo "<div class='error-message'>User not found</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vcrypto - Login</title>
<style>
    /* Styles as before */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    input[type="text"], input[type="password"], input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .error-message {
        color: red;
        margin-bottom: 10px;
    }

    .title-container {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .title {
        text-align: center;
        color: rgb(51, 68, 199);
        font-size: 24px;
        margin-left: 10px; /* Adjust margin as needed */
    }
</style>
</head>
<body>
    <div class="title-container">
        <div class="logo">
            <!-- Replace the text with your logo or symbol -->
        </div>
        <div class="title">
            <h1><img src="c.svg" alt="VCRPTO Logo" style="height: 40px;">rypto</h1>
        </div>
    </div>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <div id="error" class="error-message"></div>
        <p>Don't have an account? <a href="register.php">Create new account</a></p>
    </div>
</body>
</html>
