
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>FORMULAIRE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php ?>
        <div class="jumbotron text-center">
            
            <form action="login.php" method="POST">
                <h1> Veuillez-Vous Inscrire :</h1>
                

                <input type="submit" id='submit' value='INSCRIPTION' >
            <div class="container">
            <div class="row">
            <div class="col-sm-4">
                <?php
                
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                
    <div class="spinner-grow text-muted"></div>
    
            </div>
            </form>
        </div>
        
    </body>
</html>
<?php
function verifieMotDePasse($LOGIN, $pass){
return 1;
    function deconnecteHTTP() {
        $titre = 'Authentification';
        header('WWW-Authenticate: Basic realm="'.$titre.'"');
        header('Unauthorized', TRUE, 401);
        exit ;
        ?>
        <input type="submit" id='submit' value='exit' > <?php
        }
    
}
if ( !isset( $_SERVER['PHP_AUTH_USER    '] )
|| !isset( $_SERVER['PHP_AUTH_PW'] )
|| !verifieMotDePasse($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])
) {
$titre = 'Authentification';
header('WWW-Authenticate: Basic realm="'.$titre.'"');
header('Unauthorized', TRUE, 401);
echo "vous n’avez pas accès à cette page" ;
exit() ;
}
echo 'Authentification réussie<br>' ;
echo 'Bonjour ', $_SERVER['PHP_AUTH_USER'] ;



?>

