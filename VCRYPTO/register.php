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
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($password !== $confirmPassword) {
        echo "<div class='error-message'>Passwords do not match</div>";
    } else {
        // Hash the password before storing
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Insert user into database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful! Please login.'); window.location.href = 'login.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vcrypto - Register</title>
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

    .register-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    input[type="text"], input[type="email"], input[type="password"], input[type="submit"] {
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

    .title {
        text-align: center;
        color: #0056b3;
        font-size: 24px;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
    <div class="title">
        Register
    </div>
    <div class="register-container">
        <form id="registerForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" id="username" name="username" placeholder="&#128100; Username" required>
            <input type="email" id="email" name="email" placeholder="&#9993; Email" required>
            <input type="password" id="password" name="password" placeholder="&#128273; Password" required>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="&#128273; Confirm Password" required>
            <input type="submit" value="Register">
        </form>
        <div id="error" class="error-message"></div>
    </div>
</body>
</html>
