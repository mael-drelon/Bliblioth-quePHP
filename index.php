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
           <form method="POST" action="">
                <input type="text" name="Nom">
                <input type="text" name="MDP">
                <input type="submit" value="Ok">
           </form>

            <?php 
            if (isset($_POST["Nom"]))
            {
                $isConnect = $Utilisateur1->verifMDP($_POST["Nom"],$_POST["MDP"]);
                if ($isConnect){echo "connecté";}else{echo "erreur";}
            }
        ?>
        <?php
        try 
        {
            $maBase=new PDO('mysql:host=192.168.65.192; dbname=BaseTD2Exo2; charset=utf8','Mimos', 'D12622');
            echo "select Medecin.Nom, Medecin.Prenom from Medecin";
            $ResultRequest = $maBase->query("select Medecin.Nom, Medecin.Prenom from Medecin");
            $LesDonnéesBrutesDeLaBdd = $maBase->query("SELECT Medecin.Nom, Medecin.Prenom FROM Medecin");
            $TableauDeDonnée = $LesDonnéesBrutesDeLaBdd->fetch();
            echo " <table> ";
            while ($TableauDeDonnée= $LesDonnéesBrutesDeLaBdd ->fetch())
                {
                    echo" <tr> ";
                    echo' <td> '.$TableauDeDonnée["Nom"].' </td> <td> '.$TableauDeDonnée["Prenom"].' </td> ';
                    echo" </tr> ";
                }
            echo " </table> ";
        }
        catch (Exception $erreur) 
        {    
            echo'Erreur : '.$erreur ->getMessage();
        }
        ?>
        <br>
        EXO 1 
        <br>
        <?php
        try 
        {
            $maBase=new PDO('mysql:host=192.168.65.192; dbname=BaseTD2Exo2; charset=utf8','Mimos', 'D12622');
            echo "select * from Patient";
            $ResultRequest = $maBase->query("select * from Patient");
            $LesDonnéesBrutesDeLaBdd = $maBase->query("SELECT * FROM Patient");
            $TableauDeDonnée = $LesDonnéesBrutesDeLaBdd->fetch();
            echo " <table> ";
            while ($TableauDeDonnée= $LesDonnéesBrutesDeLaBdd ->fetch())
                {
                    echo" <tr> ";
                    echo' <td> '.$TableauDeDonnée["Nom"].' </td> <td> '.$TableauDeDonnée["Prenom"].' </td> ';
                    echo" </tr> ";
                }
            echo " </table> ";
        }
        catch (Exception $erreur) 
        {    
            echo'Erreur : '.$erreur ->getMessage();
        }
        ?>     
        <br>
        EXO 2
        <br>
        <?php
        try 
        { 
            $DB = new PDO('mysql:host=192.168.65.192;dbname=BaseTD2Exo2', 'Mimos', 'D12622', $pdo_options); 
            $req = $DB->exec("INSERT INTO table(Nom, Prenom) VALUES ($Nom, $Prenom)");
        } 
        catch(Exception $e) 
        { 
            echo 'Erreur : '.$e->getMessage(); 
        }   
        ?>

    </body>
</html>

