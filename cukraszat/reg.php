<?php include './include/functions.php'; ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Könyvtár - Regisztráció</title>
</head>
<body>
<?php
if(isset($_POST["insert"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    insertData($name, $email, $pass);
}?>

<div class="container mt-5 pt-3">
    <div class="row">
        <div class="col-12">
            <form method="post" action="reg.php">
                <div data-mdb-input-init class="form-outline mb-3">
                    <input type="text" placeholder="Név" name="name"  class="form-control p-3 mb-3" required>
                    <input type="text" placeholder="E-mail" name="email"  class="form-control p-3 mb-3" required>
                    <input type="password" placeholder="Jelszó" name="pass"  class="form-control p-3 mb-3" required>
                    <input type="password" placeholder="Jelszó újra" name="ijelszo"  class="form-control p-3 mb-3" required>
                    <p style="color: black;">Van már fiókod? <a href="login.php">Bejelentkezés</a></p>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-12">
                                <button type="submit" name="insert" class="btn btn-secondary m-1" style="width: 22rem;">Létrehoz</button>
                            </div>       
                            <div class="col-12">
                            <button type="button" onclick="location.href='login.php'" class="btn btn-secondary m-1" style="width: 22rem;">Vissza</button>
                            </div>
                        </div>    
                    </div>    
                </div>
            </form>
        </div>  
    </div>
</div>
</body>
</html>