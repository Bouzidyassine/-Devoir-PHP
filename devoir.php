<?php

$error = '';
$nom = '';
$prenom = '';
$email = '';
$jour = '';
$mois = '';
$annee = '';
$photo='';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
  //nom
 if(empty($_POST["nom"]))
 {
  $error .= '<p><label class="text-danger">Entrez votre nom</label></p>';
 }
 else
 {
  $nom = clean_text($_POST["nom"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$nom))
  {
   $error .= '<p><label class="text-danger">N\'utilisez que des lettres dans votre nom</label></p>';
  }
 }

 //prenom
 if(empty($_POST["prenom"]))
 {
  $error .= '<p><label class="text-danger">Entrez votre prénom</label></p>';
 }
 else
 {
  $prenom = clean_text($_POST["prenom"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$prenom))
  {
   $error .= '<p><label class="text-danger">N\'utiliser que des lettres dans votre prénom</label></p>';
  }
 }

 //email
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Entrez votre E-mail</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Format de votre email est invalide</label></p>';
  }
 }

//jour
 if($_POST["jour"]=="---- Jour ----")
 {
  $error .= '<p><label class="text-danger">Entrez votre date de naissance (Jour)</label></p>';
 }
 else
 {
  $jour = clean_text($_POST["jour"]);
 }

 //mois
 if($_POST["mois"]=="---- Mois ----")
 {
  $error .= '<p><label class="text-danger">Entrez votre date de naissance (Mois)</label></p>';
 }
 else
 {
  $mois = clean_text($_POST["mois"]);
 }

 //annee
 if($_POST["annee"]=="---- Année ----")
 {
  $error .= '<p><label class="text-danger">Entrez votre date de naissance (Année)</label></p>';
 }
 else
 {
  $annee = clean_text($_POST["annee"]);
 }

 //vérification de la date
 $mois  = date_parse(addslashes(htmlentities($_POST['mois'])))['month'];
 function verifier($jour, $mois, $annee){
  $nbr_jr_ms = array(
      1 => 31,
      2 => array(28, 29),
      3 => 31,
      4 => 30,
      5 => 31,
      6 => 30,
      7 => 31,
      8 => 31,
      9 => 30,
      10 => 31,
      11 => 30,
      12 => 31
  );

  if($mois != 2){
      return 1 <= $jour and $jour <= $nbr_jr_ms[$mois] ;
  }else{
      if($annee%4 == 0){
          return 1 <= $jour and $jour <= $nbr_jr_ms[$mois][1];
      }else{
          return 1 <= $jour and $jour <= $nbr_jr_ms[$mois][0];
      }
  } 
}
 $dateOk = verifier($jour, $mois, $annee);

    if($dateOk){
    }else{
      $error .= '<p><label class="text-danger">Vérifiez votre date de naissance </label></p>';
    }

//photo
if(empty($_POST["photo"]))
 {
  $error .= '<p><label class="text-danger">Téléchargez votre photo d\'identité!</label></p>';
 }
 else
 {
  $photo = clean_text($_POST["photo"]);}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 if($error == '')
 {
  $file_open = fopen("contact_data.csv", "a");
  $no_rows = count(file("contact_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'nom'  => $nom,
   'prenom'  => $prenom,
   'email'  => $email,
   'jour' => $jour,
   'mois' => $mois,
   'annee' => $annee,
   'photo' => $photo
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Vos données sont enregistrées. Merci!</label>';
  $nom = '';
  $prenom = '';
  $email = '';
  $jour = '';
  $mois = '';
  $annee = '';
  $photo ='';
 }
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Formulaire d'inscription d'un nouveau étudiant</h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     <h3 align="center">Yncréa Maroc</h3>
     <br />
     <?php echo $error; ?>
     <div class="form-group">
     <!-- NOM -->
      <label>Nom</label>
      <input type="text" name="nom" placeholder="Entrez votre nom" class="form-control" value="<?php echo $nom; ?>" />
     </div>
     <div class="form-group">
     <!--PRENOM -->
      <label>Prénom</label>
      <input type="text" name="prenom" placeholder="Entrez votre prénom" class="form-control" value="<?php echo $prenom; ?>" />
     </div>
     <div class="form-group">
     <!-- EMAIL -->
      <label>E-mail</label>
      <input type="text" name="email" class="form-control" placeholder="Entrez votre e-mail" value="<?php echo $email; ?>" />
     </div>
  <div class="form-group">
<!-- DATE DE NAISSANCE -->
     <label>Date de naissance</label>
<!-- DATE DE NAISSANCE (JOURS) -->
    <select id="jrns" class="form-control" name="jour" >
     <option selected>---- Jour ----</option>
       <?php for($i=1; $i<=31; $i++){ ?>
        <option><?php echo $i ?></option>
       <?php } ?>
    </select>
<!-- DATE DE NAISSANCE (MOIS) -->
    <select id="msns" class="form-control" name="mois" >
     <option selected>---- Mois ----</option>
       <?php for($i=1; $i<=12; $i++){ ?>
        <option><?php echo date('F', mktime(0, 0, 0, $i, 10)); ?></option>
       <?php } ?>
    </select>
<!-- DATE DE NAISSANCE (ANNEE) -->
    <select id="anns" class="form-control" name="annee" >
      <option selected>---- Année ----</option>
        <?php for($i=1895; $i<=(2021-18); $i++){ ?>
      <option><?php echo $i ?></option>
        <?php } ?>
    </select>
     </div>
     <div class="mb-3">
                    <label for="formFile" class="form-label">Entrer votre photo d'identité</label>
                    <input class="form-control" type="file" name="photo" id="photo">
                  </div> <br>
     <div class="form-group" align="center">
     <!-- SUBMIT -->
      <input type="submit" name="submit" class="btn btn-info" value="Envoyer" />
     </div>
     <!-- RESET -->
     <div class="form-group" align="center">
      <input type="reset" name="reset" class="btn btn-info" value="Annuler" />
     </div>
    </form>
   </div>
  </div>
 </body>
</html>