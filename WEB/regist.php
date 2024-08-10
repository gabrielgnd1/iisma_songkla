<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="POST" action="process_registration.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="nationality">Nationality:</label>
        <select name="nationality" id="nationality" required>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
        </select><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>