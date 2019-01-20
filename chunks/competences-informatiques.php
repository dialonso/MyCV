 <h4>Compétences informatiques</h4>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Domaines</th>
      <th scope="col">Outils</th>
      <th scope="col">Niveau</th>
    </tr>
  </thead>
  <tbody>
           <?php 
            $sql = "SELECT competences.id, competences_categories.libelle AS categorie1 , competences.libelle AS outil ,competences.niveau AS niveau FROM competences INNER JOIN competences_categories on competences.id_categorie = competences_categories.id ORDER BY competences_categories.libelle ASC ";
            foreach ($mbd->query($sql) as $compe) {
            ?>
               <tr id="<?php echo $compe ['id']; ?>">
               <td><?php echo $compe ['categorie1']; ?></td>               
               <td><?php echo $compe ['outil']; ?></td>
          <td><?php $livel = $compe['niveau']; $p = ($livel/5)*100; ?>
            <div>
            <div class="progress-bar progress-bar-success " role="progressbar" aria-valuemin="0" aria-valuemax="5" style= "width:<?php echo $p.'%';?>">
              <?php echo $livel.' / 5';?></div></div>
          </td>
               </tr>
            <?php } ?>
  </tbody>
</table>