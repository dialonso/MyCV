<?php include('ressources/calcul_nb_mois.php'); ?>
    <h4>Experiences professionnelles</h4>
 	<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Type</th>
		      <th scope="col">Titre</th>
		      <th scope="col">Entreprise</th>
		      <th scope="col">Date Debut</th>
		      <th scope="col">Date Fin</th>
		      <th scope="col">Duree</th>
		    </tr>
		  </thead>

		        <tbody>
            <?php 
            $sql = "SELECT experiences.id, experiences.libelle AS libelle, ELT(MONTH(experiences.date_debut), 'Janvier' , 'Fevrier' , 'Mars' , 'Avril' , 'Mai' , 'Juin' , 'Juillet' , 'Aout' , 'Septembre' , 'Octobre' , 'Novembre', 'Decembre' ) AS moisdebut , YEAR(experiences.date_debut) AS anneedebut, experiences.date_debut AS debut, ELT(MONTH(experiences.date_fin), 'Janvier' , 'Fevrier' , 'Mars' , 'Avril' , 'Mai' , 'Juin' , 'Juillet' , 'Aout' , 'Septembre' , 'Octobre' , 'Novembre', 'Decembre' ) AS moisfin, YEAR(experiences.date_fin) AS anneefin, experiences.date_fin AS fin, experiences.endroit, experiences_categories.libelle AS categorie from experiences INNER JOIN experiences_categories on experiences.id_categorie = experiences_categories.id ORDER BY debut DESC ";
            foreach ($mbd->query($sql) as $expe) {
            ?>
               <tr id="<?php echo $expe ['id']; ?>">
               <td><?php echo $expe ['categorie']; ?></td>               
               <td><?php echo $expe ['libelle']; ?></td>
               <td><?php echo $expe ['endroit']; ?></td>
               <td><?php echo $expe ['moisdebut']. ' ' . $expe ['anneedebut'] ; ?></td>
               <td><?php echo $expe ['moisfin']. ' ' . $expe ['anneefin'] ; ?></td>
               <td><?php $debut= $expe['debut']; $fin=$expe['fin']; $d=date("Ym",strtotime($debut)); $f=date("Ym",strtotime($fin)); echo calculNbMois($f, $d).' Mois';?>
               </tr>
            <?php } ?>
        </tbody>
	</table>