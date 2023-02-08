<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?php echo site_url("assets/bootstrap-3.3.6-dist/css/bootstrap.css"); ?> rel="stylesheet">
    <link href=<?php echo site_url("assets/css/style.css"); ?> rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="container">
        <?php
            $this->load->view('Header');
        ?>
        <div class="row">
            <div>
                <h3>Liste des demandes recus</h3>
                <ul class="list-group">
                    <?php foreach ($demande as $dm) { ?>
                    <li><?php echo $dm['idObjAtakalo'] ; ?></li>
                    <li><a href="<?php echo site_url('afficheproduit/detail/'.$dm['idObjAtakalo']) ?>">Ce produit</a>-------------
                        <a href="<?php echo site_url('afficheproduit/detail/'.$dm['idObjTakalo']) ?>">Contre votre produit</a></li>
                    <li><a href="<?php echo site_url('ajout/validationechange/'.$dm['idEchange'].'/'.$dm['idObjAtakalo'].'/'.$dm['idUserMandefa'].'/'.$dm['idObjTakalo'].'/'.$dm['idUserMandray']) ?>" class="btn btn-primary" role="button">Valider</a>                   
                    <a href="<?php echo site_url('ajout/annuleechange/'.$dm['idEchange']) ?>" class="btn btn-default" role="button">Refuser</a></li>
                    <?php }  ?>                    
                </ul>
                <h3>Liste des demandes envoyers</h3>
                <ul class="list-group">
                    <?php foreach ($envoi as $e) { ?>
                        <li><?php echo $e['idObjTakalo'] ; ?></li>
                        <li><a href="<?php echo site_url('ajout/annuleechange/'.$e['idEchange']) ?>" class="btn btn-default" role="button">Annuler</a></li>
                    <?php } ?>                    
                </ul>
            </div>           
        </div>      
        <?php
            $this->load->view('Footer');
        ?>
    </div>    
</body>
</html>

