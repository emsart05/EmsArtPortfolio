<!DOCTYPE html>
<html lang="en">
<head>
    <!-- css -->
    <link rel="stylesheet" href="style2.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Libre+Barcode+39&family=Press+Start+2P&family=Shizuru&family=Source+Code+Pro&family=Syne+Mono&display=swap" rel="stylesheet">
   <!-- other -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="sign.js"></script>
</head>

<nav id="signup-nav">
    <a href="index.html" id="sign-nav-item">Home</a>
    <a href="projects.html" id="sign-nav-item">Projects</a>
    <a href="naked.html" id="sign-nav-item">oh ong?</a>
    <a href="DDLC.html" download id="sign-nav-item">dokidoki read me</a>
    <a href="ggg.html" id="sign-nav-item">pooping dog</a>
</nav>

<body id="sign-body">

    <form id="signup-box" method="POST" action="form.php">
        <p id="signup-box-lable">
            Sign Up
        </p>

        <p id="signup-box-item">
            Enter your email:<br><br>
            <input type="email" name="email" autocomplete="email" id="input-box1" class="email" required>
        </p>

        <p id="signup-box-item">
            Enter your first name:<br><br>
            <input type="text" name="fname" id="input-box2" class="firstName" required>
        </p>

        <p id="signup-box-item">
            Enter your last name:<br><br>
            <input type="text" name="lname" id="input-box3" class="lastName" required>
        </p>

        <p id="signup-box-item">
            Create a username:<br><br>
            <input type="text" name="username" autocomplete="username" id="input-box4" class="username" required>
        </p>

        <p id="signup-box-item">
            Create a password:<br><br>
            <input type="password" name="password" autocomplete="current-password" id="input-box5" class="password" required>
        </p>

        <button type="submit" name="submit" value="Submit" id="submit-button">Submit</button>
    </form>
    
</body>
</html>