<!DOCTYPE html>
<html>
<head>
    <title>Calculate Value</title>
    <style>
        body {
            background-color: #333; /* Dark background color */
            color: #fff; /* Light text color */
            font-size: 20px; /* Increased text size */
            text-align: center; /* Center align the content */
        }
        form {
            display: inline-block;
            background-color: #444; /* Darker background color for form */
            padding: 20px;
            border-radius: 10px;
            margin: auto;
        }
        select {
            width: 200px; /* Set width for select boxes */
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #007bff; /* Button color */
            color: #fff; /* Button text color */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Button hover color */
        }
    </style>
</head>
<body>
    <h2>Select values for X, Y, and Z</h2>
    <form method="post" action="">
        <label for="x">X:</label>
        <select name="x" id="x">
            <option value="1">College Level</option>
            <option value="1.25">District/Taluka Level</option>
            <option value="2">State Level</option>
            <option value="3">National Level Sports</option>
        </select><br><br>

        <label for="y">Y:</label>
        <select name="y" id="y">
            <option value="1.25">Participation</option>
            <option value="2">Achievements</option>
        </select><br><br>

        <label for="z">Z:</label>
        <select name="z" id="z">
            <option value="3">Sports</option>
            <option value="5">Hackathons</option>
            <option value="3">Committee Competitions</option>
            <option value="2.5">Extra Curricular</option>
            <option value="3">Projects</option>
            <option value="4">Research Papers</option>
            <option value="5">Copyrights</option>
            <option value="6">Patents</option>
            <option value="2">Cultural Performances</option>
        </select><br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $x = $_POST['x'];
        $y = $_POST['y'];
        $z = $_POST['z'];

        $result = $x * $y * $z;

        echo "<h2>The calculated value is: $result</h2>";
    }
    ?>
</body>
</html>