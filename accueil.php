<?php
//Doctype HTML
    include("template/doctype.php");
?>

<?php
//Haut de page/Header
    include("template/header.php");
    get_header('accueil');
?>


<main>


<div class="container bg-dark mt-4 rounded">
    <h1 class="text-center titrePages">LA BASE</h1>
</div>

<div class="container justify-content-center">
    <p class=" text-justify textPage">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptas, id quasi culpa aperiam ipsa labore sit, nisi amet eos tempora optio aspernatur voluptates doloribus mollitia quia perferendis reiciendis quidem.   La base est un endroit ouvert a tous.... situé route de la charité entre Bourges et Saint-Germain-du-Puy.</p>
</div> 

<div class="container mt-4">

    <div class="row justify-content-around">
        <div class="bar text-center col-11 col-md-5 col-lg-5 mb-4 bg-dark text-white animated bounceInLeft">
            <h4 class="sousTitre mt-2">BAR</h4>
            <p class="text-justify textPage">Prendre un verre entre amis, certains diront que c’est déjà super, mais d’autres penseront que ça peut vite devenir boring ; alors que diriez-vous d’une bonne bière, verre de vin et d’une partie endiablée de billard ou de babyfoot !</p> 
            <img class="img-fluid mb-2" src="img/style1.jpg" height="100" alt="photo bar">
        </div> 

        <div class="club text-center col-11 col-md-5 col-lg-5 mb-4 bg-dark text-white animated bounceInRight">
            <h4 class="sousTitre mt-2">CLUB</h4>
            <p class="text-justify textPage">Prendre un verre entre amis, certains diront que c’est déjà super, mais d’autres penseront que ça peut vite devenir boring ; alors que diriez-vous d’une bonne bière, verre de vin et d’une partie endiablée de billard ou de babyfoot !</p>
            <img class="img-fluid "  src="img/bar10.jpg"  height="100"  alt="photo club">   
        </div> 
    </div>
</div>
<!-- 
 <div class="centrer  w-75 mb-2">
    <div class="slider rounded" id="slider1">  -->
        <!-- Slides -->
       <!--  <div class="carousel1"></div>
        <div class="carousel2"></div>
        <div class="carousel3"></div>
        <div class="carousel4"></div>  -->
        
        <!-- The Arrows -->
<!--         <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100" fill="#c1292e"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
        <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100" fill="#c1292e"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
    </div>
</div>  -->


</main>


    

<?php
//Bas de page/Footer
include("template/footer.php");
?>
