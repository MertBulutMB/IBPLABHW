<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Info</title>
</head>
<body>
<center>
    <br>
    <br>

    <h1>Enter Data</h1>
    <form action="insert.php" method="post">

        <br>
        <br>

        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName" required>

        <br>
        <br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName" required>

        <br>
        <br>

        <label for="emailAddress">Email Address:</label>
        <input type="email" name="email" id="emailAddress" required>

        <br>
        <br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other" required>
        <label for="other">Other</label>

        <br>
        <br>

        <input type="submit" value="Submit">
    </form>
</center>
</body>
</html>
