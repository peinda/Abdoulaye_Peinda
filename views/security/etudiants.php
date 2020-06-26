 
<div  class="container box">
<h1 class="text-center text-decoration">VEUILLEZ ENREGISTRER UN ETUDIANT</h1>
<br>
<div class="form-group">
<label for="" class="col-sm-2 control-label">Matricule:</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="matricule" name="matricule" error="error-1" style="border:2px solid #36ABC5">
<span class="error-form" id="error-1"></span>
</div>
<div class="form-group">
<br><br><br><label for="" class="col-sm-2 control-label">Nom:</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="nom" name="nom" error="error-2" style="border:2px solid #36ABC5">
<span class="error-form" id="error-2"></span>
</div>
<div class="form-group">
<br><br><br><label for="" class="col-sm-2  control-label">Prenom:</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="prenom" name="prenom" error="error-3" style="border:2px solid #36ABC5">
<span class="error-form" id="error-3"></span>
</div>
<div class="form-group">
<br><br><br><label for="" class="col-sm-2  control-label">Email:</label>
<div class="col-sm-4">
<input type="email" class="form-control" id="email" name="email" error="error-4" style="border:2px solid #36ABC5">

<span class="error-form" id="error-4"></span>
</div>
<div class="form-group">
<br><br><br><label for="" class="col-sm-2 control-label">Téléphone:</label>
<div class="col-sm-4">
<input type="phone" class="form-control" id="phone" name="phone" error="error-5" style="border:2px solid #36ABC5">
<span class="error-form" id="error-5"></span>
</div>
<div class="form-group">
<br><br><br><label for="" class="col-sm-2 control-label">Naissance:</label>
<div class="col-sm-4">
<input type="date" class="form-control" id="d_naissance" name="d_naissance" error="error-6" style="border:2px solid #36ABC5">
<span class="error-form" id="error-6"></span>
</div>
<div class="form-group">
<br><br><br><label for="" class="col-sm-2  control-label">type:</label>
<div class="col-sm-4">
<select name="t_etudiant" id="t_etudiant" class="form-control" style="border:2px solid #36ABC5" error="error-7">
<option value="" id="vide"></option>
<option value="Bourse_complete" id="Bourse_complete">Bourse compléte</option>
<option value="Demie_bourse"  id="Demie_bourse">Demie bourse</option>
<option value="Non_boursier"  id="Non_boursier">Non boursier</option>
</select>
<span class="error-form" id="error-7"></span>
</div>
<div class="form-group"  >
    <div class="col-sm-7" id="affiche_question">

    </div>
</div>
</div>
 
<div class="float-right">
<input type="submit" class="btn btn-primary" value="ENREGISTRER" name="soumission" id="soumission" style="margin-left:80%;height:50px;font-weight:bold">
</div>
</div>
<script src="./publics/js/inputgenerator.js" ></script>
 