﻿    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Comptable :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=validerFrais&action=afficherFrais" title="Afficher fiche de frais ">Afficher fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=suivrePaiment&action=selectionnerClients" title="Consultation de mes fiches de frais">Suivie paiement frais</a>
           </li>
 	   <li class="smenu">
               <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
    </div>
    