<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>

<body>
    <h1>Welcome To IngatAku</h1>
    <h4>An Easy Web For All Your TO DO LIST Need</h4>
    <form action="/login" method="post">
        @csrf
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <p>Login</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <!-- email -->
            <label for="email">Email Address</label>
            <input type="text" placeholder="Enter Email Address" name="email" id="email" required>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif

            <br>

            <!-- Password -->
            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif

            <!-- sub container for the checkbox and forgot password link -->
            <div class="subcontainer">
                <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
            </div>


            <!-- Submit button -->
            <button type="submit">Login</button>

            <!-- Sign up link -->
            <p class="register">Not a member? <a href="/register">Register here!</a></p>

        </div>
</body>

</html>
