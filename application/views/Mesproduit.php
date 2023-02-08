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
            <?php
                $this->load->view('Menu');
            ?>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($mesproduits as $prod) { ?>        
                        <?php if($prod['idUser']==$user){ ?>
                            <div class="col-md-4" style="padding: 5px">        
                                <div style="border: 1px #000 solid;border-radius: 15px;text-align: center">
                                    <?php foreach ($allimage as $img) { ?>
                                        <?php if ($img['idObj']==$prod['idObj']) { ?>
                                            <img src=<?php echo site_url("assets/src/".$img['nom']) ?>  alt="..." width="230" height="230px" style="align-content: center">
                                        <?php } ?>                                        
                                    <?php } ?>
                                    <div class="caption">
                                        <h3><?php echo $prod['nom']; ?></h3>
                                        <p>Prix:<?php echo $prod['prix']; ?> MGA</p>
                                        <p style="text-overflow: ellipsis;height: 100px;"><?php echo $prod['description']; ?> MGA</p>
                                        <p>
                                            <a href="#" class="btn btn-primary" >+10%</a>
                                            <a href="#" class="btn btn-primary" >+20%</a>
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-primary" >-10%</a>
                                            <a href="#" class="btn btn-primary" >-20%</a>
                                        </p>
                                      <p>
                                          <a href="#" class="btn btn-primary" role="button" style="background-color: #2b3990;color: white;">Modifier</a>
                                          <a href="<?php echo site_url('ajout/insertechange/'.$idobjet.'/'.$iduser).'/'.$prod['idObj'] ?>" class="btn btn-default" role="button">Echanger</a>
                                          <a href="<?php echo site_url('ajout/supobjet/'.$prod['idObj']) ?>" class="btn btn-primary" role="button" style="background-color: #2b3990;color: white;">Supprimer</a>
                                      </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>      
        <?php
            $this->load->view('Footer');
        ?>
    </div>    
</body>
</html>
