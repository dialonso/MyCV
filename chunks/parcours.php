<h4>Parcours scolaire</h4>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Année Debut</th>
      <th scope="col">Année Fin</th>
      <th scope="col">Diplome</th>
      <th scope="col">Formation</th>
      <th scope="col">École</th>
    </tr>
  </thead>

       <tbody>
            <?php 

            $sql = "SELECT id, ELT(MONTH(date_debut), 'Janvier' , 'Fevrier' , 'Mars' , 'Avril' , 'Mai' , 'Juin' , 'Juillet' , 'Aout' , 'Septembre' , 'Octobre' , 'Novembre', 'Decembre' ) AS moisi, YEAR(date_debut) AS anneei, ELT(MONTH(date_fin), 'Janvier' , 'Fevrier' , 'Mars' , 'Avril' , 'Mai' , 'Juin' , 'Juillet' , 'Aout' , 'Septembre' , 'Octobre' , 'Novembre', 'Decembre' ) AS moisf, YEAR(date_fin) AS anneef, diplome, libelle, ecole FROM parcours " ;
            foreach ($mbd->query($sql) as $personne) {
            ?>
               <tr id="<?php echo $personne ['id']; ?>">
               <td><?php echo $personne ['moisi'] . ' ' . $personne ['anneei']; ?></td>
               <td><?php echo $personne ['moisf'] . ' ' . $personne ['anneef']; ?></td>              
               <td><?php echo $personne ['diplome'];?></td>
               <td><?php echo $personne ['libelle'];?></td>
               <td><?php echo $personne ['ecole'];?></td>
               </tr>
            <?php } ?>
        </tbody> 
</table>