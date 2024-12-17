<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php 
    $dbName = "cukrasz";
    $dbUser = "root";
    $dbPass = "";

    $dsn = "mysql:host=localhost;dbname=".$dbName.";charset=utf8mb4;";
    $pdo = new PDO($dsn, $dbUser, $dbPass);

    function insertData($name, $email, $pass)
    {
        global $pdo;
        if($pdo)
        {
            $name = trim($name);
            $email = trim($email);
            $pass = trim($pass);

            $sql = "SELECT * FROM users WHERE email = '$email'";
            $query = $pdo->query($sql);
            $records = $query->fetchAll(PDO::FETCH_ASSOC);
            // Ha létezik már az email
            if(count($records) > 0)
            {
                echo '<div class="alert alert-danger">Az email cím már foglalt</div>';
            }

            // Ha nem létezik
            else
            {
                if(strlen($name) >= 5 && strlen($email) >= 5)
                {
                    // Kódolás
                    $hashed = password_hash($pass, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users VALUES(NULL, :name, :email, :pass)";
                    $query = $pdo->prepare($sql);
                    $query->execute([
                        'name' => $name,
                        'email' => $email,
                        'pass' => $hashed //  kódolt jelszó
                    ]);
                    echo '<div class="alert text-center alert-success">Sikerült a regisztráció</div>';
                }
                else
                {
                    echo '<div class="alert text-center alert-danger">Hibás adatok!</div>';
                }
            }
        }
    }

    // LOGIN
    function selectData($email, $pass)
    {
        global $pdo;
        if($pdo)
        {
            $email = trim($email);
            $pass = trim($pass);
            $sql = "SELECT * FROM users 
            WHERE email = :email";

            $query = $pdo->prepare($sql);
            $query->execute(['email' => $email]);
            $record = $query->fetch(PDO::FETCH_ASSOC);

            // Ha van ilyen felhasználó
            if($record)
            {
                $storedPass = $record['jelszo'];

                // Jeszó ellenőrzés
                if(password_verify($pass, $storedPass))
                {
                    // SESSION
                    session_start();
                    $_SESSION['id'] = $record['id'];
                    $_SESSION['nev'] = $record['nev'];
                    $_SESSION['email'] = $record['email'];
                    header("Location: index.php");
                    //exit();
                    //echo 'Sikeres bejelentkezés!';
                }
                else{
                    echo '<div  class="alert text-center alert-danger">Hibás felhasználónév vagy jelszó!</div>';
                }
            }
            else
            {
                echo '<div class="alert text-center alert-danger">Nem létező e-mail cím</div>';
            }
        }
    }

    // UPDATE
    function updateData($name, $email, $pass)
    {
        global $pdo;
        if($pdo)
        {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $pass = trim($_POST['pass']);

            if(strlen($name) >= 5 && strlen($email) >= 5 
            && strlen($pass) >= 5)
            {
                $hashed = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "UPDATE users SET nev=:name, email=:email, jelszo=:pass
                WHERE email=:session_email";
                $query = $pdo->prepare($sql);
                $query->execute([
                    'name' => $name,
                    'email' => $email,
                    'pass' => $hashed,
                    'session_email' => $_SESSION['email']
                ]);
                echo '<div class="alert text-center alert-success">Sikeres változtatás</div>';
                $_SESSION['nev'] = $name;
                $_SESSION['email'] = $email; 
            }
            else
            {
                echo '<div class="alert text-center alert-danger">Hibás adat</div>';
            }
        }
    }
?>

</body>
</html>