<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <p>Enter your Details</p>
    <form action="register.php" method="post">
        <div class="container">
    <label for="name"><b>User Name</b></label>
    <br>
    <input class="form-control"  type="text" name="name" padding-right: 30px; required>
    <br>
    <br>
    <label for="contact"><b>Contact number</b></label>
    <br>
    <input class="form-control" type="text" name="contact" required>
    <br>
    <br>
    <label for="address"><b>Adress</b></label>
    <br>
    <input class="form-control" type="text" name="address" required>
    <br>
    <br>
    <label for="pincode"><b>Pincode</b></label>
    <br>
    <input class="form-control" type="text" name="pincode" required>
    <br>
    <br>
    <label for="mail"><b>Mail id</b> </label>
    <br>
    <input class="form-control" type="text" name="mail" required >
    <br>
    <br>
    <button class="btn btn-primary" type="submit" bg-primary name="Create">Signup</button>
    <br>

</form>
</div>

</body>
</html>
