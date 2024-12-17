<?php
require_once 'connect.php'; // A connect.php fájl beillesztése
require_once '../data/torta.php';

// Ellenőrizzük, hogy az 'id' paraméter létezik-e az URL-ben
$selectedId = isset($_GET['id']) ? (int)$_GET['id'] : null;

if ($selectedId !== null) {
    // Lekérjük a kiválasztott tortát az adatbázisból
    $stmt = $dbconn->prepare('SELECT * FROM tortak WHERE id = ?');
    $stmt->bind_param('i', $selectedId);
    $stmt->execute();
    $result = $stmt->get_result();
    $selectedTorta = $result->fetch_assoc();

    if ($selectedTorta) {
        // Az adatbázisból lekért adatok alapján példányosítunk egy torta objektumot
        $torta = new Torta($selectedTorta['torta_kep'], $selectedTorta['torta_nev'], $selectedTorta['torta_ar'], $selectedTorta['torta_leiras'], $selectedTorta['kategoria'], $selectedTorta['meret'], $selectedTorta['elerhetoseg'], $selectedTorta['allergenek']);
    } else {
      echo '<div>A kiválasztott torta nem található az adatbázisban!</div>';
    }
} else {
    echo "Nincs megadva 'id' az URL-ben!";
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../res/services.css">
    <title>Cukraszat</title>
</head>
<body>
<!-- Nav -->
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
                    <a title="Profil" href="modify.php">Fiókom</i></a>
                </li>

                <li class="nav-item px-2">
                    <a title="Kijelentkezés" href="logout.php">Kijelentkezés</a> 
                </li>
            </ul>
        </div>      
    </div>
</nav>
<!-- ::Nav -->


<!-- Main -->
<section id="main">
<div class="container" id="main">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <img src="<?php echo $torta->homekep ?>" alt="" srcset="" class="img-fluid">
        </div>
        <div class="col-md-6 col-sm-12 mt-5">
            <h2 class="text-uppercase mt-4 torta-nev text-center"><?php echo $torta->nev ?></h2>
            <div class="container">
                <div class="row justify-content-center align-item-center text-center">
                    <div class="col-4">
                        <h3 class="torta-ar text-start"><?php echo $torta->ar ?> Ft</h3> 
                    </div>
                    <div class="col-8 text-end mt-2">
                        <a href="dev.php"><button type="button" class="btn btn-info m-1">Rendelés</button></a>
                    </div>
                </div>
            </div>
            <p class="mt-4 fw-lighter font-monospace torta-leiras"><?php echo $torta->leiras ?></p>
                <table class="table table-hover">
                      <tr>
                        <th scope="row">Kategória</th>
                        <td><?php echo $torta->kategoria ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Méret</th>
                        <td><?php echo $torta->meret ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Elérhetőség</th>
                        <td><?php echo $torta->elerhetoseg ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Allergének</th>
                        <td><?php echo $torta->allergenek ?></td>
                      </tr>
                </table>        
        </div>
    </div>
</div>
<!-- Allergének -->
<section id="allergenek">
<div class="container text-center">
<h3>Allergének</h3>
<div class="row">
    <div class="col-3">
    <img src="../media/tej.png" alt="gluten" class="img-fluid">
    <p>Tej <br>1</p>
    </div>
    <div class="col-3">
    <img src="../media/tojas.png" alt="gluten" class="img-fluid">
    <p>Tojás <br>2</p>
    </div>
    <div class="col-3">
    <img src="../media/gluten.png" alt="gluten" class="img-fluid">
    <p>Glutén <br>3</p>
    </div>
    <div class="col-3">
    <img src="../media/dio.png" alt="gluten" class="img-fluid">
    <p>Diófélék <br>4</p>
    </div>
</div>
</section>
<!-- ::Allergének -->


</section>
<!-- ::Main -->

<!-- SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!-- booo-boootstrap -->
</body>
</html>