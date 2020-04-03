

<?php
function get_header($current_page = ''){
?>

<header>
  
<nav class="navcolor navbar navbar-expand-lg  navbar-light bg-dark fixed-top">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="accueil">
      <img src="img/Blabaseblanc.png" width="20" height="30" class="d-inline-block align-top" alt="logo la base">
  </a>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  <ul class="navbar-nav mr-auto mt-2 mt-md-0">


  <?php if($current_page == 'accueil'): ?>
    <li class="nav-item">
      <a class="anav nav-link text-danger border-bottom border-danger" href="accueil">La base</a>
    </li>
  <?php else: ?>
    <li class="nav-item">
      <a class="anav nav-link text-white" href="accueil">la base</a>
    </li>
  <?php endif;  ?>


    <?php if($current_page == 'info'): ?>
    <li class="nav-item ">
      <a class="anav nav-link text-danger border-bottom border-danger" href="info">Infos - Acces</a>
    </li>
    <?php else: ?>
    <li class="nav-item ">
      <a class="anav nav-link text-white" href="info">Infos - Acces</a>
    </li>
    <?php endif;  ?>




    <!-- <?php /* if($current_page == 'agenda'): */ ?> --> <!-- si je suis sur la page aganda alors rouge et border -->
    <!-- <li class="nav-item">
      <a class="anav nav-link text-danger border-bottom border-danger" href="Agenda.php">Agenda</a>
    </li> -->
    <?php /* else: */ ?> <!-- si non, mise a en page classique blanc -->
   <!--  <li class="nav-item">
      <a class="anav nav-link text-white" href="agenda.php">Agenda</a>
    </li> -->
    <?php /* endif;  */ ?> <!-- Je ferme le if ici  -->

    <!-- <li class="nav-item">
      <a class="anav nav-link text-white" href="#!">Photos</a>
    </li> -->

    <?php if($current_page == 'privatisation'): ?>
    <li class="nav-item">
      <a class="anav nav-link text-danger border-bottom border-danger" href="privatisation">Privatisation - Événementiel</a>
    </li>
    <?php else: ?>
    <li class="nav-item">
      <a class="anav nav-link text-white" href="privatisation">Privatisation - Événementiel</a>
    </li>
    <?php endif;  ?>


    <?php if($current_page == 'contact'): ?>
      <li class="nav-item">
        <a class="anav nav-link text-danger border-bottom border-danger" href="contact">Contactez-nous</a>
      </li>
    <?php else: ?>
     <li class="nav-item">
      <a class="anav nav-link text-white" href="contact">Contactez-nous</a>
    </li>
    <?php endif;  ?>
   
  </ul>


  <ul class="navbar-nav ml-auto nav-flex-icons mt-1">
    <li class="nav-item avatar">
      <a href="https://www.facebook.com/labasebourges/" target="_blank"><img  src="img/logofacebook.png" height="30" width="30" alt="logo facebook"></a>
     <!--  <a href="https://www.snapchat.com/l/fr-fr/" target="_blank"><img src="img/logosnapchat.png" height="30" width="30" alt="logo snapchat"></a>
      <a href="https://www.instagram.com/?hl=fr" target="_blank"><img  src="img/logoinstagram.png"  height="30" width="30" alt="logo instagram"></a> -->
    </li>
  </ul>
  
</div>
</nav>

<div class="header d-flex flex-wrap align-content-center justify-content-center">
<div>
  <img class="mt-5" src="img/logolabasesiteweb.png" alt="logo labase" height="150" width="150">
</div>

</div>
 
</header>


<?php
}
?>


<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0"></script>

