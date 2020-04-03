<?php
session_start();
?>

<?php
//Doctype HTML
    include("template/doctype.php");
?>

<?php
//Haut de page/Header
    include("template/header.php");
    get_header('contact');
?>


<main>

<div class="container bg-dark mt-4 rounded">
    <h1 class="text-center titrePages mt-2">Contactez-nous</h1>
</div>

    
<div class="container">
    <div class="row justify-content-between">

     
  
        <div class="text-center col-12 col-md-6 col-lg-6">

        <?php if(array_key_exists('errors', $_SESSION)): ?>
                <div class="alert alert-danger mt-2">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
        <?php  endif; ?>

        <?php if(array_key_exists('success', $_SESSION)): ?>
                <div class="alert alert-success mt-2">
                   <p>Votre message a été envoyé avec succès</p>
                </div>
        <?php  endif; ?>

        <form class="form-horizontal" action="postcontact.php" method="POST">
                <div class="form-group text-center mt-2">
                    <label class="control-label col-sm-2 badge badge-dark text-white sousTitre" for="nom">Nom:</label>        
                        <input type="text" class="form-control border border-danger bg-light mt-1 textPage" id="nom" placeholder="Nom" name="nom" value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : '';?>">
                </div>

                <div class="form-group text-center">
                    <label class="control-label col-sm-2 badge badge-dark text-white sousTitre" for="prenom">Prénom:</label>  
                    <input type="text" class="form-control border border-danger bg-light mt-1 textPage" id="prenom" placeholder="Prénom" name="prenom" value="<?= isset($_SESSION['inputs']['prenom']) ? $_SESSION['inputs']['prenom'] : '';?>">
                </div>

                <div class="form-group text-center">
                    <label class="control-label col-sm-2 badge badge-dark text-white sousTitre" for="email">Email:</label>
                    <input type="email" class="form-control border border-danger bg-light mt-1 textPage" id="email" placeholder="Email" name="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '';?>">
                </div>

                <div class="form-group text-center mt-4">
                    <label class="control-label col-sm-2 badge badge-dark text-white sousTitre" for="message">Message</label>
                    <textarea type="message" class="form-control border border-danger bg-light mt-1 textPage" id="message" placeholder="Votre message ici" name="message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';?></textarea>
                </div>

                <div class="d-flex flex-wrap justify-content-center">
                    <button type="submit" name="envoyer" class="btn btn-danger bouton">ENVOYER</button>
                </div>
            </form>
            
        </div>

        <div class="text-center col-12 col-md-6 col-lg-6  bg-dark text-white rounded cardshadow mb-4 mt-2 animated bounceInRight">
            <img class="mt-4" src="img/logolabasesiteweb.png" height="60" width="60" alt="logo La Base blanc">
            <p class="textPage">Jeudi, Vendredi, Samedi & Veilles de jours fériés <br>22H - 05H<br>584 Les Distraits, Saint-Germain-du-Puy 18390 <br></p>
            <p class="textPage">Tel : 06.59.76.72.05</p>
            <p class="textPage"> Email : labase-barclub@gmail.com</p>
            <div class="mb-4" id="mapid" style="width:100%; height: 300px"><!-- Open street map  --></div>
        </div> 
    </div>
        
</div>
</main>


<?php
//Bas de page/Footer
include("template/footer.php");
?>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
<script>
 // Script OpenStreet Map 

 var mymap = L.map('mapid').setView([47.096955,2.447703], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 16,
    
    id: 'mapbox/streets-v11',
    accessToken: 'pk.eyJ1IjoiYXJpYm91bGUiLCJhIjoiY2szazNqNHJxMGNzaDNocXNyeGpza3M3dCJ9.N2r2d_DdlqJ-DBfRgPq0Vw'
}).addTo(mymap);

var icone = L.icon({
    iconUrl: "img/iconemap1.png",
    iconAnchor: [20, 55]
})

var marker = L.marker([47.096955, 2.447703],{icon: icone}).addTo(mymap);
marker.bindPopup('<h4 class="text-center"> <img src="img/logolabasesiteweb.png" height="50" width="50"> </h4><p>584 Les Distraits, Saint-Germain-du-Puy 18390.</p><p class="text-center">22h-05h : Jeudi,Vendredi et Samedi.</p>');
</script>