<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?php echo site_url("assets/bootstrap-3.3.6-dist/css/bootstrap.css"); ?> rel="stylesheet">
    <link href=<?php echo site_url("assets/css/style.css"); ?> rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <title><?php echo $title; ?></title>
</head>
<body>
    
<?php if (isset($nbuse)&& isset($nbechange)) { ?>
<div>
    <p>
        Le nombre d'utilisateur inscrit:<strong><?php echo $nbuse; ?></strong>
    </p>
    <p>
        Le nombre d'echange effectuer:<strong><?php echo $nbechange; ?></strong>
    </p>
</div>
<?php } ?>
    <div class="container">
        <?php
            $this->load->view('Header');
        ?>
        <div class="row"> 
            <?php
                $this->load->view('Menu');
            ?>
            <div class="col-md-9">
                <table class="table">
                    <tr>
                        <td><strong>Ancien proprietaire</strong></td>
                        <td><strong>Objet</strong></td>
                        <td><strong>Date d'echange</strong></td>
                    </tr>
                    <?php foreach ($historique as $h) { ?>
                            <tr>
                                <td><?php echo $h['nom'].' '.$h['prenom']; ?></td>
                                <td><?php echo $h['objet']; ?></td>
                                <td><?php echo $h['DHEchange']; ?></td>
                            </tr>
                            
                    <?php } ?>                    
                </table>
            </div>
        </div>      
        <?php
            $this->load->view('Footer');
        ?>
    </div>    
</body>
</html>
