<div class="row" style="background-color: #2b3990;">
    <img src=<?php echo site_url("assets/src/images.png") ?> width="30" height="30" alt="images" style="float: left"/>
    <h3 class="titres" style="font-family: lobster;">TAKALOKALO KELY</h3>
</div>
 <nav>
    <ul class="nav nav-pills">
        <li><a href="<?php echo site_url('afficheproduit/allproduit') ?>">Acceuil</a></li>
        <li><a href="<?php echo site_url('afficheproduit/mesproduit') ?>">Mes produits</a></li>
        <li><a href="<?php echo site_url('ajout/ajoutproduit') ?>">Ajouter produit</a></li>
        <?php $user=$this->session->user; ?>
        <li><a href="<?php echo site_url('afficheproduit/demande/'.$user['iduser']) ?>">Demande d'echange</a></li>
        <?php if($user['admin']==1){ ?>            
            <li><a href="<?php echo site_url('afficheproduit/statistique') ?>">Statistique</a></li>
        <?php } ?>
        <li><a href="<?php echo site_url('afficheproduit/historique') ?>">Historique</a></li>
        <li style="float: right"><a href="<?php echo site_url('login/deconnexion') ?>">deconnexion</a></li>
    </ul>
</nav>