<html>
<body>
<div class="container">
<div class="row">
 <div class="col-md-12">
     <div class="well well-sm">
         <form class="form-horizontal" action="scripts/formprocess.php" method="POST">
            <fieldset>
             <legend class="text-center header">Veuillez remplir ce formulaire:</legend>
             <div class="form-group">
               <span class="col-md-2  text-center"><i class="fa fa-user bigicon"></i></span>
               <div class="col-md-8">
              <input id="p_nom" name="pnom" type="text" placeholder="Prenom" class="form-control">
              </div>
              </div>
               <div class="form-group">
              <span class="col-md-2 text-center"><i class="fa fa-user bigicon"></i></span>
               <div class="col-md-8">
              <input id="_nom" name="nom" type="text" placeholder="Nom" class="form-control">
              </div>
              </div>
              <div class="form-group">
              <span class="col-md-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
              <div class="col-md-8">
              <input id="e_mail" name="email" type="text" placeholder="e-mail" class="form-control">
             </div>
            </div>
             <div class="form-group">
               <span class="col-md-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                 <div class="col-md-8">
                <input id="t_phone" name="phone" type="text" placeholder="Phone" class="form-control">
               </div>
               </div>
               <div class="form-group">
               <span class="col-md-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
               <div class="col-md-8">
                <textarea class="form-control" id="message" name="message" placeholder="votre message" rows="7"></textarea>
               </div>
            </div>
              <div class="form-group">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                </div>
              </div>
           </fieldset>
        </form>
   </div>
   </div>
  </div>
</div>
</div>


</body>
</html>