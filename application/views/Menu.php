<div class="col-md-3">
    <div class=" panel panel-default">
        <div class="panel-heading" style="background-color: #2b3990;color: white;">                
            <span class="glyphicon glyphicon-align-justify" ></span> MENU <br>
        </div>
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
                <?php foreach ($categorie as $cat) { ?>
                <li><a href="<?php echo site_url('afficheproduit/categorieprod/'.$cat['idCat']) ?>"><?php echo $cat['categorie']; ?></a></li>
                <?php } ?>
            </ul>
        </div>    
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-pencil"></span>Laisser un commentaire
        </div>
        <div class="panel-body">
            Pseudo: <br>
            <input type="text" class="form-control"><br>
            Message: <br>
            <textarea name="" class="form-control" rows="10" placeholder="Tapper votre message ici"></textarea><br>
            <input type="button" value="Envoyer" class="form-control" style="background-color: #2b3990;color: white;">
        </div>                    
    </div>
</div>