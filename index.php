<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PROPTRACK</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <!-- Logo Image -->
        <div class="logo-container">
            <img src="image/Logo.png" alt="PROPTRACK Logo" class="logo">
        </div>

        <!-- Login Form -->
        <div class="form-container">
            <form action="signup.php" method="POST">

                <!-- Username Field -->
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>

                <!-- Password Field with Forgot Password Link -->
                <div class="input-container password-container">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <a href="forgot_password.php" class="forgot-password">Forgot Password?</a>
                </div>

                <button type="submit">Login</button>

                <!-- Sign-up Link -->
                <p class="form-links">New Tenant? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
</body>
</html>

