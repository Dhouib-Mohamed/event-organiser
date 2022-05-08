<?php
session_start();
if(isset($_SESSION["first_name"])) {
    header('location:index.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<form class="row g-3 needs-validation" action="user.php">
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationCustom01" name = "first_name" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" name = "last_name" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name = "email" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>
</body>
</html>