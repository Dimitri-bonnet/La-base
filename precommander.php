
<?php
//Doctype HTML
    include("template/doctype.php");
?>

<?php
//Haut de page/Header
    include("template/header.php");
    get_header('reserver');
   
?>
<main>


<div class="container bg-dark mt-4 rounded">
    <h1 class="text-center titrePages mt-2">Précommander</h1>
</div>

<div class="container">
    <div class="row">
        
    </div>
</div>

<p>Il vous suffit de remplir se formulaire a fin de recevoir un bon de précommande a présenter lors de votre arrivé à notre staff, nous vous demonderons une piéce d'identité afin de vous délivrer votre bouteille aprés le réglement de celle-ci. Merci de votre compréhension</p>
<div class="d-flex justify-content-center">
    <div class="w-25">
        <form class="form-horizontal" action="insert1and1.php" method="POST">


            <div class="form-group text-center">
                <label class="control-label col-sm-2 badge badge-dark text-white" for="nom">Nom:</label>        
                    <input type="nom" class="form-control border border-danger bg-white mt-1" id="nom" placeholder="Nom" name="nom">
            </div>

            <div class="form-group text-center">
                <label class="control-label col-sm-2 badge badge-dark text-white" for="prenom">Prénom:</label>  
                <input type="prenom" class="form-control border border-danger bg-white mt-1" id="prenom" placeholder="Prénom" name="prenom">
            </div>

            <div class="form-group text-center">
                <label class="control-label col-sm-2 badge badge-dark text-white" for="email">Email:</label>
                <input type="email" class="form-control border border-danger bg-white mt-1" id="email" placeholder="Email" name="email" required>
            </div>

            <div class="form-group text-center">
                <label class="control-label col-sm-2 badge badge-dark text-white" for="email">Message</label>
                <textarea type="message" class="form-control border border-danger bg-white mt-1" id="message" placeholder="Votre message ici" name="message" required></textarea>
            </div>

            <div class="d-flex flex-wrap justify-content-center">
                <button type="submit" name="envoyer" class="btn btn-danger mb-4">ENVOYER</button>
            </div>
        </form>
    </div>
</div>








</main>


<?php
//Bas de page/Footer
include("template/footer.php");
?>