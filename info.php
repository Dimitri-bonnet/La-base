<?php
//Doctype HTML
    include("template/doctype.php");
?>

<?php
//Haut de page/Header
    include("template/header.php");
    get_header('info');
?>

<main class="bg-light">
<div class="container bg-dark mt-4 rounded">
    <h1 class="text-center titrePages mt-2 mb-4">Infos</h1>
</div>


<div class="container">


    <div class="row justify-content-between">
        <div class="text-center col-12 col-md-4 col-lg-4">
            <h2 class="mt-4 sousTitre animated fadeInDown" id="info">Horaires d'ouverture<br> & <br> tarifs</h2>
        </div>

        <div class="text-center col-12 col-md-3 col-lg-3 bg-red text-white rounded cardshadow">
            <h4 class="sousTitre">Ouverture</h4>
            
            <h5 class="mt-4 textPage">Jeudi, Vendredi, Samedi <br>& <br>veilles de jours fériés</h5>
      
        </div> 

        <div class="text-center col-12 col-md-3 col-lg-3 bg-dark text-white rounded cardshadow">
            <h4 class="sousTitre">Horaires & Tarifs</h4>
            <p class="textPage">22h-01h <br>Tarif Happy Hour*</p>
            <p class="textPage">00h-05h <br>Tarif Habituellle</p>
            <p class="text-center tarif">*Un verre acheté un verre offert ou une bouteille achatée une bouteille offerte.  </p>
        </div> 
    </div>
        
</div>

<div class="container bg-dark rounded">
    <h1 class="text-center  titrePages mt-2">Acces</h1>
</div>

<div class="container">
    <div class="text-center mb-2">
        <img src="img/handi.png" alt="logo acces handicape" width="50" height="50">
        <img src="img/parking.png" alt="logo acces handicape" width="50" height="50">
    </div>
    
    <div class="mb-4" id="mapid" style="width:100%; height: 300px"><!-- Open street map  --></div>
</div>
</main>

<?php
//Bas de page/Footer
include("template/footer.php");
?>

