<?php
function civility(){
  if(isset($_POST['civility']) && !empty($_POST['civility'])){
    $civility = $_POST['civility'];
    return 'Vous êtes: ' . $civility;
  }
} ?>

<?php
function lastname(){
  if(isset($_POST['lastname'])){
    if (!empty($_POST['lastname'])){
      if(preg_match('/^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ\'-]+$/', $_POST['lastname'])){
        $lastname = $_POST['lastname'];
      }else{
        $lastname = 'veuillez entrer un prenom valide';
      }
    }else{
      $lastname = 'veuillez entrer votre prénom';
    } ?>
    <?php return 'Votre nom est: ' . $lastname;
  }
} ?>

<?php
function firstname(){
  if(isset($_POST['lastname'])){
    if (!empty($_POST['firstname'])){
      if(preg_match('/^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ\'-]+$/', $_POST['firstname'])){
        $firstname = $_POST['firstname'];
      }else{
        $firstname = 'veuillez entrer un nom valide';
      }
    }else{
      $firstname = 'veuillez entrer votre nom';
    } ?>
    <?php return 'Votre prénom est: ' . $firstname;
  }
} ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part5 exe1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <form action="index.php" method="POST">
    <div class="form-group">
      <label for="civility">Civilité</label>
      <select name = "civility" id="civility" class="form-control" >
        <option value=""></option>
        <option value="Madame">Madame</option>
        <option value="Monsieur">Monsieur</option>
      </select>
      <p><?= civility() ?></p>
    </div>
    <div class="form-group">
      <label class="col-form-label" for="lastname">Nom</label>
      <input  id="lastname" name="lastname" type="text" class="form-control" placeholder="Nom" id="inputDefault" />
      <p> <?= lastname() ?></p>
    </div>
    <div class="form-group">
      <label class="col-form-label" for="firstname">Prénom</label>
      <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Prénom" id="inputDefault" />
      <p> <?= firstname() ?></p>
    </div>
    <button type="submit" name="submit"class="btn btn-success">soumettre</button>
  </form>
  <p><a href="index.php">retour</a></p>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
