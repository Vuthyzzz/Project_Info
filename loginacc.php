<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div class="name-login">
        <h1 class="login">Login</h1>
        <form method="POST" action="" class="stor">
            <label for="first_name" class="write-name-more">First Name</label>
            <input type="text" id="first_name" name="first_name" class="inputed-data" placeholder="Input first name" required>

            <label for="last_name" class="write-name-more">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="inputed-data" placeholder="Input last name" required>

          
            <label for="email" class="write-name-more">Your Email</label>
            <input type="email" id="email" name="email" class="inputed-data" placeholder="Input your Email" required>

            <label for="password" class="write-name">Your Password</label>
            <input type="password" id="password" name="password" class="inputed-data" placeholder="Input your Password" required>

            <input type="submit" value="OK" class="input-ok">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            if ($email == "nopvuthy2222@gmail.com" && $password == "thy2222") {
                // Redirect to the new page
                echo "<script>window.location.href = 'indexed.php';</script>";
                exit();
            } else {
                // Display error message
                echo "<p class='error-message'>Invalid email or password. Please try again.</p>";
            }
        }
        ?>
    </div>

</body>
</html>
