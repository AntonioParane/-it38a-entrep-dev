<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - PROPTRACK</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">

        <div class="form-container">
            <form action="index.php" method="POST">

                <div class="form-content">
                    <!-- Left Section (Logo behind "New Account") -->
                    <div class="left-section">
                        <div class="logo-container">
                            <img src="image/Signup_Logo.png" alt="PROPTRACK Logo" class="logo">
                        </div>
                    </div>

                    <!-- Right Section (Form Fields) -->
                    <div class="right-section">
                        <h2 class="form-title">New Account</h2>

                        <div class="input-group">
                            <div class="input-container">
                                <label for="firstname">First Name</label>
                                <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required>
                            </div>

                            <div class="input-container">
                                <label for="lastname">Last Name</label>
                                <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-container">
                                <label for="contact">Contact</label>
                                <input type="text" id="contact" name="contact" placeholder="Enter your contact number" required>
                            </div>

                            <div class="input-container">
                                <label for="emergencynumber">Emergency Number</label>
                                <input type="text" id="emergencynumber" name="emergencynumber" placeholder="Enter emergency number" required>
                            </div>
                        </div>

                        <!-- Full Width Permanent Address -->
                        <div class="input-container full-width">
                            <label for="permanentaddress">Permanent Address</label>
                            <input type="text" id="permanentaddress" name="permanentaddress" placeholder="Enter permanent address" required>
                        </div>

                        <!-- Occupation -->
                        <div class="input-container">
                            <label for="occupation">Occupation</label>
                            <input type="text" id="occupation" name="occupation" placeholder="Enter your occupation" required>
                        </div>

                        <!-- Terms and Conditions (Centered) -->
                        <div class="terms-container">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">I accept the <a href="#">Terms and Conditions</a></label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit">Sign Up</button>

                        <!-- Redirect to Login -->
                        <p>Already a Tenant? <a href="index.php">Login</a></p>
                    </div>

                </div>

            </form>
        </div>

    </div>

</body>

</html>
