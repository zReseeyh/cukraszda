<?php include './include/functions.php'; ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Könyvtár - Login</title>
</head>

<body>
<?php
if(isset($_POST["login"])){
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    selectData($email, $pass);
}?>

<div class="container d-flex justify-content-center align-items-center">
    <div class="row mt-5">
        <div class="col-12">
            <form method="post" action="login.php">
                <div data-mdb-input-init class="form-outline mb-3">
                    <input type="text" placeholder="Email" name="email" class="form-control p-3 mb-3" required>
                    <input type="password" placeholder="Password" name="pass" class="form-control p-3" required>
                    <p class="pt-2">Nincs még fiókod? <a href="reg.php">Regisztráció</a></p>
                    <div class="row text-center">
                        <div class="col-12">
                            <button type="submit" name="login" class="btn btn-secondary m-1" style="width: 22rem;">Belépés</button>
                        </div>
                        <div class="col-12">
                            <button type="button" onclick="location.href='reg.php'" class="btn btn-secondary m-1" style="width: 22rem;">Vissza</button>
                        </div>
                    </div>                  
                </div>
            </form>
        </div>
    </div>      
</div>
</body>
</html>