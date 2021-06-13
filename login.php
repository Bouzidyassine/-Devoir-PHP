<!DOCTYPE html>
<html lang="en">
    <head>
    <title>FORMULAIRE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
   </head>
    <body>
    <form>
        <div class="container">
        <div class= "jumbotron text-center">
        <h1>FORMULAIRE:</h1>
        </div>
        
        <div class="jumbotron">
            <div class="col-sm-4">
            <div class="form-group">
            <form action="/action_page.php">
            <label for="country_code">Nom de l'utilisateur:</label>
            <input type="text" id="country_code" name="country_code" pattern="[A-Za-z]{9}" title="veuillez composer un nom sans nombre"><br><br>
            </form>
            <label for="country_code">Entrer votre prenom::</label>
            <input type="text" id="country_code" name="country_code" pattern="[A-Za-z]{9}" title="veuillez composer un prenom sans nombre"><br><br>
            </form>
            <form action="/action_page.php">
            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pwd"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Doit contenir au moins un chiffre et une lettre majuscule et minuscule, et au moins 8 caractères ou plus">

            </form>
            <label>
            Date de naissance:
            <select name="Jour_in" id="Jour_in">
            <?php for($jour_in=1;$jour_in<=31;$jour_in++){?>
            <option value="<?php echo $jour_in ?>"><?php echo $jour_in ?></option>
            <?php } ?>
            </select>
            <select name="Mois_in" id="Mois_in">
            <?php for($moiss_in=1;$moiss_in<=12;$moiss_in++){?>
            <option value="<?php echo $moiss_in ?>"><?php echo $moiss_in ?></option>
            <?php } ?>
            </select>
            <select name="Annee_in" id="Annee_in">
            <?php for($annee_in=1990;$annee_in<=2002;$annee_in++){?>
            <option value="<?php echo $annee_in ?>"><?php echo $annee_in?></option>
            <?php } ?>
            </select>
            </label>
            <form action="form.php" method="POST"><p>
            lieu de naissance: <br>
            <input type="text" class="form-control" id="uname" placeholder="Enter lieu de Naissance" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            </p></form>
            <p>
            Nationnalite:<br>
            <select >
            <option value="1">Marocaine</option>
            <option value="3">Francaise</option>
            <option value="4">Espagnole</option>
            <option value="5">Algerienne</option>
            </select>
            <form action="cases.php" method="POST"><p>
            sexe ?<br>
            <input type="Radio" name="radio1" value=1> Homme
            <input type="Radio" name="radio1" value=2> Femme
            </p></form>
            <p>
            Ville:<br>
            <select name= "Ville">
            <option value="1">Rabat</option>
            <option value="3">Sale</option>
            <option value="4">Kenitra</option>
            <option value="5">Skhirate</option>
            <option value="6">Casa</option>
            </select>
            <form action="form.php" method="POST"><p>
            Adresse: <br>
            <textarea name="t" cols="20" rows="7">
                

            </textarea>
            </p></form>
            <p>
            Tel<br>
            <select name= "Tel">
            <option value="1">+212</option>
            <option value="3">+213</option>
            <option value="4">+216</option>
            <option value="5">+221</option>
            <form action="/action_page.php">
            <label for="country_code">Numero de telephone:</label>
            <input type="text" id="country_code" name="country_code" pattern="[0-9]{10}" title="veuillez composer un numero "><br><br>
            </form>
            <p>
            Bac:<br>
            <select name= "bac">
            <option value="1">option Math(A)</option>
            <option value="3">option Math(B)</option>
            <option value="4">option PC</option>
            <option value="6">option SVT</option>
            </select>
            <form action="form.php" method="POST"><p>
            CIN: <br>
            
        <input type="text" class="form-control" id="uname" placeholder="Enter " name="uname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
            </p></form>
            <form action="form.php" method="POST"><p>
            CNE: <br>
        <input type="text" class="form-control" id="uname" placeholder="Enter " name="uname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
            </p></form>
            <label>
            Date d'inscription :
            <select name="Jour_in" id="Jour_in">
            <?php for($jour_in=1;$jour_in<=31;$jour_in++){?>
            <option value="<?php echo $jour_in ?>"><?php echo $jour_in ?></option>
            <?php } ?>
            </select>
            <select name="Mois_in" id="Mois_in">
            <?php for($moiss_in=1;$moiss_in<=12;$moiss_in++){?>
            <option value="<?php echo $moiss_in ?>"><?php echo $moiss_in ?></option>
            <?php } ?>
            </select>
            <select name="Annee_in" id="Annee_in">
            <?php for($annee_in=2012;$annee_in<=2021;$annee_in++){?>
            <option value="<?php echo $annee_in ?>"><?php echo $annee_in?></option>
            <?php } ?>
            </select>
            </label>
            <button type="button" class="btn btn-primary" onclick="updatetaille();jQuery('#tailleModal').modal('toggle');return false;">Enregistrer</button>
            </form>
            <input type="submit">
    </form>        
    </div>
    
    </body>
</html>
  
    
