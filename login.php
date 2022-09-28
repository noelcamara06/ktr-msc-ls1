<?php
$erreur = null;
if(!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])){
    if($_POST['pseudo'] === 'noel' && $_POST['motdepasse'] === 'camara'){

        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: index.php');
    } else{
        //Message d'erreur'
        $erreur = "Identifaint incorrectes";
    }
}
require 'auth.php';
if(est_connecte()) {
    header('Location: index.php');
    exit();
}
require 'header.php';
?>


<?php if($erreur): ?>
<div class="alert alert_danger">
    <?= $erreur ?>
</div>
    <?php endif ?>
<form action="" method="post">
    <div class="form-group">
        <input type="text" name=" pseudo" placeholder="Non d'utilsateur">
    </div>
    <div class="form-group">
        <input type="password" name="motdepasse" placeholder=" Votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary"> Se connceter</button>
</form>

<?php require 'footer.php'; ?>