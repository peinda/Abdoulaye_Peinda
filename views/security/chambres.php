<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="../publics/bootstrap/bootstrap.min.css">
    <script src="../publics/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../publics/css/css.css">
</head>
<body>
    <form method="POST" action="" id="room_form">
<div  class="container box">
    <h1 class="text-center">VEUILLEZ ENREGISTRER UNE CHAMBRE</h1> 
<div class="form-group">
 <label for="" class="col-sm-5 control-label">NUMERO_DEPARTEMENT:</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="num_dpt" name="num_dpt" error="error-2" style="border:2px solid #36ABC5">
<span class="error-form" id="error-2"></span>
</div>
<div class="form-group">
<br><br><br><label for="" class="col-sm-5  control-label">TYPE_CHAMBRE:</label>
<div class="col-sm-4">
<select name="type_chambre" id="type_chambre" class="form-control" style="border:2px solid #36ABC5" error="error-7">
<option value=""></option>
<option value="Unique"  id="Unique">Unique</option>
<option value="Partagee"  id="Partagee">Partagée</option>
</select>
 <span class="error-form" id="error-3"></span>
</div>
</div>
 
<div class="form-group">
<input type="submit" class="btn btn-primary" value="ENREGISTRER" name="add_room" id="add_room">
</div>
</div>
</form>
</body>
</html>