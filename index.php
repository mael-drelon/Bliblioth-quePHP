<?php require("user.php"); ?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Index</title>
    </head>
    <body>
        <?php echo "TPmysql";
        
            $Utilisateur1 = new user();
            $Utilisateur1->SetNom("Gabriel");
            ?> 
           <form mathod="POST" action="">
                <input type="text" name="Nom">
                <input type="text" name="MDP">
                <input type="submit" value="Ok">
           </form>

            <?php 
            if (isset($_POST["Nom"])){
                $isConnect = $Utilisateur1->verifMDP($_POST["Nom"],$_POST["MDP"]);
                if ($isConnect){echo "connecté";}else{echo "erreur";}
            }
        ?>
    </body>
</html>

