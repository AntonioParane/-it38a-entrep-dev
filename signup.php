<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>PROPTRACK</h1>
        <div class="form-container">
            <form action="index.php" method="POST">
                <h2>Sign Up</h2>
                <input type="text" name="firstname" placeholder="First name" required>
                <input type="text" name="lastname" placeholder="Last name" required>
                <input type="text" name="contact" placeholder="Contact" required>
                <input type="text" name="emergencynumber" placeholder="Emergency Number" required>
                <input type="text" name="permanentaddress" placeholder="Permanent Address" required>
                <input type="text" name="occupation" placeholder="Occupation" required>
                <button type="submit">Sign Up</button>
                <p>Already a Tenant? <a href="index.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
