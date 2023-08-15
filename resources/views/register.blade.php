<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <h1>Welcome To IngatAku</h1>
    <h4>An Easy Web For All Your TO DO LIST Need</h4>
    <form action="/register" method="POST">
        @csrf
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <p>Register</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <div class="name">
                <!-- First Name -->
                <label for="first_name">First Name</label>
                <input type="text" placeholder="Enter First Name" name="first_name" required>

                <br>

                <!-- Last Name -->
                <label for="last_name">Last Name</label>
                <input type="text" placeholder="Enter Last Name" name="last_name" required>

            </div>

            <!-- Password -->
            <label for="email">Email Address</label>
            <input type="email" placeholder="Enter Email Address" name="email" required>


            <!-- Password -->
            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <!-- Password -->
            <label for="cnpswrd">Confirm Password</label>
            <input type="password" placeholder="Enter Confirm Password" name="cnpswrd" required>

            <!-- Password -->
            <label for="phone_number">Phone Number</label>
            <input type="tel" placeholder="Enter Phone Number" name="phone_number" required>

            <!-- sub container for the checkbox and forgot password link
                <div class="subcontainer">
                    <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
                </div> -->


            <!-- Submit button -->
            <button type="submit">Register</button>

            <!-- Sign up link -->
            <p class="register">Have a member? <a href="/login">Login here!</a></p>

        </div>
</body>

</html>
