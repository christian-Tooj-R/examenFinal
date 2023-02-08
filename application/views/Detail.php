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
            <div class="col-md-11">
                <div class="col-lg-4">
                    <?php foreach ($image as $img) { ?>
                        <img src=<?php echo site_url("assets/src/".$img['nom']) ?>  alt="...">  
                    <?php } ?>
                </div>
                <div class="col-lg-6">
                    <?php foreach ($produit as $prod) { ?>
                    <p><strong>Nom:</strong> <?php echo $prod['nom']; ?></p>
                    <p><strong>Prix:</strong> <?php echo $prod['prix']; ?></p>
                    <p><strong>Detail:</strong> <?php echo $prod['description']; ?></p>
                    <?php } ?>
                </div>
                <p>
                    <a href="<?php echo site_url('ajout/getechange/'.$prod['idObj'].'/'.$prod['idUser']) ?>" class="btn btn-primary" role="button" style="background-color: #2b3990;color: white;">Echanger</a>                
                </p>
            </div>            
        </div>      
        <?php
            $this->load->view('Footer');
        ?>
    </div>    
</body>
</html>

