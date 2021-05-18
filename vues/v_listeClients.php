 <div id="contenu">
      <h2>Mes clients </h2>
      <h3>Client à selectionner : </h3>
      <form action="index.php?uc=<?PHP echo $lien ?>&action=voirMoisFraisClients" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="visiteur" accesskey="n">Clients : </label>
        <select id="lstvisiteur" name="lstvisiteur">
            <?php
                       foreach ($lesVisiteurs as $unVisiteur)
			{
                            $visiteur = $unVisiteur['Visiteur'];
                            $nomVisiteur = $unVisiteur['nomVisiteur'];
                            $prenomVisiteur = $unVisiteur['prenomVisiteur'];
			   
				if($visiteur == $visiteurASelectionner){
				?>
				<option selected value="<?php echo $visiteur  ?>"><?php echo $nomVisiteur." ".$prenomVisiteur ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $visiteur  ?>"><?php echo  $nomVisiteur." ".$prenomVisiteur  ?> </option>
				<?php 
				}
			
			}
		   ?>    
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

