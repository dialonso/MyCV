<?php
/**
* Calcul le nombre de mois entre deux dates.
* Format attendu AAAAMM pour $a et $b.
*/
function calculNbMois($a,$b)
{
	$date1 = intval(substr($a,0,4))*12 + intval(substr($a,4,2));
	$date2 = intval(substr($b,0,4))*12 + intval(substr($b,4,2));
	return $date1 - $date2;
}
?>

<?php
// fonction rubrique Pour affichage des rubrique
function rubrique(){
	$get = htmlspecialchars($_GET['categorie']);
	switch ($get) {
		case 'Parcours':
		return 'Parcours Scolaire';
			break;
		case 'competence':
		return 'Compétences Informatique';
			break;
			case 'experience':
		return 'Expérience Profesionnelle';
			break;
			case 'autre':
		return 'Autres';
			break;
		default:
		return "Parcours Scolaire";
			break;
	}
}
;?>