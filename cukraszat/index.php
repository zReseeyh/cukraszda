<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./res/style.css">
    <title>Cukrászat</title>
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
                    <a title="Torták" href="#tortak">Torták</i></a>
                </li>
                <li class="nav-item px-2">
                    <a title="Kapcsolat" href="#kapcsolat">Kapcsolat</i></a>
                </li>
                <li class="nav-item px-2">
                    <a title="Profil" href="./include/modify.php">Fiókom</i></a>
                </li>

                <li class="nav-item px-2">
                    <a title="Kijelentkezés" href="./include/logout.php">Kijelentkezés</a> 
                </li>
            </ul>
        </div>      
    </div>
</nav>


<section id="main">
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./media/home.jpg" class="d-block w-100" alt="Home_torta">
      </div>
    </div>
</div>

<section id="bemutatkozas" class=" mt-5 mb-5">
    <div class="container mt-5 p-3">
        <p class="mt-5">Örömmel köszöntelek a Cukrászda honlapján, ahol az édes ízek és a varázslatos kreativitás találkoznak. Mi, a Cukrászda csapata, szenvedélyesen hisszük, hogy minden pillanat egy kis édes ínyencség, és ezeket az élményeket szeretnénk megosztani veled.</p>
        <p class="mt-5">Itt, a Cukrászda virtuális otthonában, felfedezheted különleges édességeinket, amelyeket kizárólag a legfinomabb alapanyagokból készítünk. Legyen szó klasszikus tortákról, kényeztető süteményekről vagy egyedi desszertekről, minden falatunkat szeretettel és odafigyeléssel készítjük el, hogy az élmény valóban felejthetetlen legyen.</p>
        <p class="mt-5">Szeretettel várunk mindenkit, aki szereti az édességeket, és aki velünk együtt szeretné megünnepelni az élet apró örömeit. Legyen szó egy családi ünnepségről, baráti találkozóról vagy egy egyszerű vágyról valami édesre, itt biztosan megtalálod az igazit.</p>  
        <p class="mt-5">Kövesd velünk az édes útját és csatlakozz a Cukrászda közösségéhez! Legyen számodra is mindig egy kis édes csoda az életben!</p>  
    </div>
</section>


<section id="tortak">
<div class="container-fluid text-center mt-5 mb-5">
    <h3>Torták</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card_costume px-2 mt-1">
                <div class="card_costumehead">
                    <img src="./media/kinder.png" alt="SárváriTorta.jpg" class="img-fluid">
                </div>
                <div class="card_costumebody">
                  <h2 class="torta_neve">Kinder torta</h2>
                  <div class="btn-group-vertical">
                    <a href="./include/services.php?id=1"><button type="button" class="btn btn-info m-1 reszletekbtn">Részletek</button></a>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card_costume px-2 mt-1">
                <div class="card_costumehead">
                    <img src="./media/csokis.png" alt="CsokoládéTorta.jpg" class="img-fluid">
                </div>
                <div class="card_costumebody">
                  <h2 class="torta_neve">Csokoládé torta</h2>
                  <div class="btn-group-vertical">
                    <a href="./include/services.php?id=2"><button type="button" class="btn btn-info m-1 reszletekbtn">Részletek</button></a>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card_costume px-2 mt-1">
                <div class="card_costumehead">
                    <img src="./media/malnas.png" alt="MálnásSajttorta.jpg" class="img-fluid">
                </div>
                <div class="card_costumebody">
                  <h2 class="torta_neve">Málnás sajttorta</h2>
                  <div class="btn-group-vertical">
                    <a href="./include/services.php?id=3"><button type="button" class="btn btn-info m-1 reszletekbtn">Részletek</button></a>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card_costume px-2 mt-1">
                <div class="card_costumehead">
                    <img src="./media/kokuszos.png" alt="KókuszosTorta.jpg" class="img-fluid">
                </div>
                <div class="card_costumebody">
                  <h2 class="torta_neve">Kókuszos torta</h2>
                  <div class="btn-group-vertical">
                    <a href="./include/services.php?id=4"><button type="button" class="btn btn-info m-1 reszletekbtn">Részletek</button></a>
                  </div>
                </div>
            </div>
        </div>

    </div>
</div>
</section>


<section id="banner" class="text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <p class="stat"><span id="count1">0</span> féle <br> <span class="costumetext">Torta</span></p> 
            </div>
            <div class="col-4">
                <p class="stat"><span id="count2">0</span>+ <br><span class="costumetext">Elégedett vásárló</span></p>   
            </div>
            <div class="col-4">
                <p class="stat"><span id="count3">0</span> év <br><span class="costumetext">Tapasztalat</span></p>
            </div>
        </div>
    </div>
</section>








<section id="kapcsolat" class="pb-5 pt-5">
<div class="container-fluid text-center">
    <h3 class="mb-4">Kapcsolat</h3>
    <div class="row">
        <div class="col-4">
            <i class="fas fa-map-marked"></i><br>
            <h4>Címünk</h4>
            <p>Pécs, Valami utca 12/A</p>
        </div>
        <div class="col-4">
            <i class="fa fa-phone" aria-hidden="true"></i><br>
            <h4>Telefon</h4>
            <p>+36 30 123 4567</p>
        </div>
        <div class="col-4">
            <i class="fa fa-at" aria-hidden="true"></i><br>
            <h4>Email</h4>
            <p>cukrasz@gmail.com</p>
        </div>
    </div>
</div>
</section>

<section id="nyitvatartas">
    <div class="container">
        <h4 class="text-center mb-5">Nyitvatartás</h4>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Hétfő</th>
                    <td class="text-center">9<sup>00</sup></td>
                    <td class="text-center">17<sup>00</sup></td>
                </tr>
                <tr>
                    <th scope="row">Kedd</th>
                    <td class="text-center">9<sup>00</sup></td>
                    <td class="text-center">17<sup>00</sup></td>
                </tr>
                <tr>
                    <th scope="row">Szerda</th>
                    <td class="text-center">9<sup>00</sup></td>
                    <td class="text-center">17<sup>00</sup></td>
                </tr>
                <tr>
                    <th scope="row">Csütörtök</th>
                    <td class="text-center">9<sup>00</sup></td>
                    <td class="text-center">17<sup>00</sup></td>
                </tr>
                <tr>
                    <th scope="row ">Péntek</th>
                    <td class="text-center">9<sup>00</sup></td>
                    <td class="text-center">17<sup>00</sup></td>
                </tr>
                <tr>
                    <th scope="row" class="">Szombat</th>
                    <td colspan="2" class="text-center">Zárva</td>
                </tr>
                <tr>
                    <th scope="row">Vasárnap</th>
                    <td colspan="2" class="text-center">Zárva</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>


<section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1466.0724923955147!2d18.247331047520152!3d46.079487571507705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1shu!2shu!4v1709939500511!5m2!1shu!2shu" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


</section>


<section id="footer">
    <div class="container-fluid">
        <footer class="py-3 my-4">
            <p class="text-center">&copy; 2024 Kovacs Zoltan</p>
        </footer>
    </div>
</section>

<!-- SCRIPT -->
<script src="https://kit.fontawesome.com/67fdbe999b.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!-- booo-boootstrap -->
<script src="./js/count.js"></script>
</body>
</html>