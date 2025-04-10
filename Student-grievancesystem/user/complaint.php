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
    <body background ="image.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <?php include "../inc/header.php" ?>
        <h1 class="px-5 py-3" style="margin-left:100px;">Make A Complaint</h1>
        <div class = "px-5">
            <!-- <button type="button" class="btn btn-primary" onclick="location.href='/student_complaint_system/user/index.php'">Back</button> -->
        <div class="container px-5 my-5">
        <form id="contactForm" action="complaintdata.php" method="POST">
        <div class="form-floating mb-3">
            <select class="form-select" name="category" aria-label="Category" required style="width: 350px;">
                <option value=""></option>
                <option value="Electrical">Electrical</option>
                <option value="Plumbing">Plumbing</option>
                <option value="Furniture">Furniture</option>
                <option value="Mess">Mess</option>
                <option value="Hostel">Hostel</option>
                <option value="Paper Re-evaluation">Paper Re-evaluation</option>
                <option value="Academics">Academics</option>
                <option value="Health Centre">Health Centre</option>
                <option value="AAA">AAA</option>

            </select>
            <label for="category">Category</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="location" type="text" placeholder="Location" required style="width: 350px;"/>
            <label for="location">Location</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="description" type="text" placeholder="Description" required style="width: 350px;" />
            <label for="description">Description</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="date" type="date" placeholder="Date" required style="width: 350px;" />
            <label for="date">Date</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" name="submitButton" type="submit" style="width: 150px; margin-left: 100px;">Submit</button>
        </div>
    </form>
</div>
    </body>
</html>