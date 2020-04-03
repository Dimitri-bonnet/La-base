<?php
//Doctype HTML
    include("template/doctype.php");
?>

<?php
//Haut de page/Header
    include("template/header.php");
    get_header('privatisation');
?>


<main>

<div class="container bg-dark mt-4 rounded">
    <h1 class="text-center titrePages anime">Privatisation/Événementiel</h1>
</div>

<h5 class="text-center mt-4 textPage">Vous souhaitez organiser un événement ?</h5>
<h5 class="text-center mb-2 textPage">Nous mettons à disposition notre établissement à la location et privatisation.</h5>
<div class="text-center">
    <!-- <h6 class="textPage">Devis et demande spécifique</h6> -->
    <a href="contact.php" class="btn btn-dark mb-4"><h6 class="mt-2 text-white bouton " id="bouton">Contactez-nous</h6></a>
 </div>
 


<div class="container">


        <div class="row justify-content-between animated fadeIn" id="privat">
            <div class="bg-dark col-12 col-md-12 col-lg-3 rounded mb-2 cardshadow"> <!-- Starts card -->

                <img  class="img-fluid mt-4 mb-4" src="img/etabli1.jpg" alt="">

             

                <div class="text-white rounded font-weight-bolder" id="etablissement">

                <p class="text-center sousTitre ">Prestations :</p>
                    <ul>
                        <li>150 m²</li>
                        <li>80/120 personnes</li>
                        <li>Grande terrasse</li>
                        <li>Espace Fumeur</li>
                        <li>Billard/Babyfoot</li>
                        <li>Parking</li>
                        <li>Accessibilité aux personnes handicapées</li>
                    </ul>
                </div>

            </div> <!-- End card -->

            <div class="bg-dark col-12 col-md-12 col-lg-3 rounded mb-2 cardshadow"> <!-- Starts card -->

                <img  class="img-fluid mb-4 mt-4" src="img/dispo.jpg" alt="">
               
        
                 <div class="text-white rounded font-weight-bolder" id="disponibilite">
                 <p class="text-center sousTitre ">Journée, Soirée et/ou nuit :</p>
                    <ul>
                        <li>Dimanche</li>
                        <li>Lundi</li>
                        <li>Mardi</li>
                        <li>Mecredi</li>
                    </ul>

                    <p class="text-center sousTitre ">Sur demande : </p>

                    <ul>
                        <li>Jeudi</li>
                        <li>Vendredi</li>
                        <li>Samedi</li>
                    </ul>
                    
                
                </div> 
            </div> <!-- End card -->

            <div class="bg-dark col-12 col-md-12 col-lg-3 rounded mb-2 cardshadow"> <!-- Starts card -->

                <img  class="img-fluid mt-4 mb-4" src="img/event.jpg" alt="">
               
                <div class=" text-white rounded font-weight-bolder" id="evenement">
                    <p class="text-center sousTitre">Particulier et professionnels :</p>
                    <ul>
                        <li>Soirée d'entreprise</li>
                        <li>Séminaire d'entreprise</li>
                        <li>Assemblée générale</li>
                        <li>Soirées de lancement produit</li>
                        <li>Soirées à thème</li>
                        <li>Anniversaire</li>
                        <li>Etc...</li>
                    </ul>
                </div>
            </div> <!-- End card -->
        
        </div>    
          
</div>

<!-- <div class="centrer  w-75 mb-2">
    <div class="slider rounded" id="slider1"> -->
        <!-- Slides -->
       <!--  <div class="carousel1"></div>
        <div class="carousel2"></div>
        <div class="carousel3"></div>
        <div class="carousel4"></div> -->
        
        <!-- The Arrows -->
 <!--        <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100" fill="#c1292e"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
        <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100" fill="#c1292e"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
    </div>
</div>  -->

</main>

<?php
//Bas de page/Footer
include("template/footer.php");
?>
