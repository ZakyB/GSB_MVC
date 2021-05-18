<form action="index.php?uc=validerFrais&action=validerFicheFrais" method="post">
    
    <div class="piedForm">
        <p>
           <input type="hidden" name ="visiteur" id="idVisiteur" value="<?php echo $idVisiteur ?>">
           <input type="hidden" name ="mois" id="idMois" value="<?php echo $leMois ?>">
           <input id="ok" type="submit" value="Valider" size="20" />
           <input id="annuler" type="reset" value="Effacer" size="20" />
           
        </p> 
    </div>

</form>