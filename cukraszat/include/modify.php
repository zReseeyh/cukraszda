<?php
   include 'functions.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="../res/services.css">
      <title>Fiókom</title>
  </head>

  <body>
    
<?php

if(!isset($_SESSION['id']))
{
    header("Location: login.php");
    exit();
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon custom-toggler"></span>
        </button>
        <div class="collapse navbar-collapse nav-buttons justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item px-2">
                    <a title="Torták" href="../index.php">Főoldal</i></a>
                </li>
                <li class="nav-item px-2">
                    <a title="Kijelentkezés" href="./logout.php">Kijelentkezés</a> 
                </li>
            </ul>
        </div>      
    </div>
</nav>

<h2 class="text-center">Adatlap módosítás</h2>
<?php
if(isset($_POST['modify'])){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
updateData($name, $email, $pass);
} ?>                           
<div class="container ">
    <form method="post" action="modify.php">
        <div>
          <label for="inputName">Az Ön neve</label>
          <input type="text" name="dname" id="defaultName" value="<?php echo $_SESSION['nev']; ?>" class="form-control p-3 mb-3" readonly>
        </div>
        <div>
          <input type="text" name="name" id="inputName" maxlength="50" class="form-control p-3 mb-3" placeholder="Új neve">
        </div>
        <div>
          <label for="inputEmail">E-mail címe</label>
          <input type="email" name="demail" id="defaultEmail" value="<?php echo $_SESSION['email']; ?>" class="form-control p-3 mb-3"  readonly>
        </div>
        <div>
           <input type="email" name="email" id="inputEmail" maxlength="256" class="form-control p-3 mb-3" placeholder="Új e-mail cím">
        </div>
        <hr>
        <div>
          <input type="password" id="inputPass" placeholder="Új jelszó" name="pass" class="form-control p-3 mb-3" >
        </div>
       <div class="col-12 text-center">
          <button class="btn btn-secondary m-1" name="modify">Küldés</button>
        </div>
      </form>
</div>


<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>