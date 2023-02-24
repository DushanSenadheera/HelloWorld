<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/SignUp.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="bg">
        <img src="assets/signup-back.svg" alt="back" class="Medical-care-bg">
        <div class="sign-up">
            <div class="sign-up-form">
                <h1>Sign Up</h1>
                <form action="backend/createAccount.php" method="post">
                    <input type="text" name="p-name" placeholder="Pharmacy Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="address" placeholder="Address" required>
                    <input type="tel" name="mobile" placeholder="Phone Number" required>
                    <input type="text" name="p-license-no" placeholder="Pharmacy license number" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
                    <input type="checkbox" required>            
                        <p>I agree to <a href=""> Terms of Services </a>and <a href=""> Privacy Policy </a></p>
                    <input type="submit" value="Sign-up" class="sign-up-btn">
                </form>
                Already have an account?<a href="login.php">Sign In</a>
            </div>
        </div>
    </div>
</body>

</html>