<?php
include("vues/v_sommaireComptable.php");
$action = $_REQUEST['action'];
$idComptable = $_SESSION['idVisiteur'];

$lien = "suivrePaiment";

switch($action){
	case 'selectionnerClients':{
            $lesVisiteurs=$pdo->getLesVisiteurs($idComptable);
		$lesCles = array_keys( $lesVisiteurs );
		$visiteurASelectionner = $lesCles[0];
		include("vues/v_listeClients.php");
		break;
        }
        case 'voirMoisFraisClients': {

            $idVisiteur = $_REQUEST['lstvisiteur'];
            $lesMois=$pdo->getLesMoisDuVisiteur($idVisiteur,"VA");
            $lesCles = array_keys( $lesMois );
            if ($lesCles != null){
            $moisASelectionner = $lesCles[0];
            include("vues/v_listeMoisComptable.php");
            //echo $idVisiteur;
            }
            else {
                $lesVisiteurs=$pdo->getLesVisiteurs($idComptable);
                $lesCles = array_keys( $lesVisiteurs );
                $visiteurASelectionner = $lesCles[0];
                ajouterErreur("Le client sélectionné n'a pas de fiches");
                include("vues/v_erreurs.php");
                include("vues/v_listeClients.php");
            }
            break;
        }
        case 'voirFraisClients': {

            $idVisiteur = $_REQUEST['idVisiteur'];
            include("vues/v_listeMoisComptable.php");
            $leMois = $_REQUEST['lstMois'];
            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
            $lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$leMois);
            $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
            $numAnnee =substr( $leMois,0,4);
            $numMois =substr( $leMois,4,2);
            $libEtat = $lesInfosFicheFrais['libEtat'];
            $montantValide = $lesInfosFicheFrais['montantValide'];
            $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
            $dateModif =  $lesInfosFicheFrais['dateModif'];
            $dateModif =  dateAnglaisVersFrancais($dateModif);
            include("vues/v_etatFrais.php");
           
        break;
        }
        case 'FraisClientsPDF': {
            echo "pouet";
            
        };
}
