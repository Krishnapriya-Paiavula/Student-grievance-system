<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body background="img/loginbg.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <?php include "inc/header.php" ?>
        <!-- <h2 class=" py-3 px-5"style="color: #000;">Login</h2> -->
        <h2 class="py-5 px-5" style="color: #000; margin-left: 170px;margin-top: 10px">Login</h2>

        <!-- <div class="container px-5 my-5">
        <form id="contactForm" action="logindata.php" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" name="emailAddress" type="email" placeholder="Email Address" required />
                <label for="emailAddress">Email Address</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="password" type="password" placeholder="Password" required />
                <label for="password">Password</label>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit" >Submit</button>
            </div>
        </form>
    </div> -->
    <div class="container px-5 my-5">
    <form id="contactForm" action="logindata.php" method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" name="emailAddress" type="email" placeholder="Email" required style="width: 250px;" />
            <label for="emailAddress">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="password" type="password" placeholder="Password" required style="width: 250px;" />
            <label for="password">Password</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit" required style="width: 150px; margin-left: 50px;">Submit</button>
        </div>
    </form>
</div>

    </body>
</html>