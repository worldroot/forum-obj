<?php
    include_once '../model/topic.php';
    include_once '../controller/topicC.php';

    $error = "";

    // create user
    $Topic = null;

    // create an instance of the controller
    $TopicC = new TopicC();
    if (
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["msg"]) && 
        isset($_POST["commentaire"])
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["msg"]) && 
            !empty($_POST["commentaire"])
        ) {
            $Topic = new Topic(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['msg'],
                $_POST['commentaire']
            );
            $TopicC->ajouterTopic($Topic);
            var_dump($TopicC);
            header('Location:afficherTopics.php');
        }
        else
            $error = "Missing information";
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherTopics.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom"  ></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom"  ></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email"  >
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="msg">Message:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="msg" id="msg" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="commentaire">Commentaire
                        </label>
                    </td>
                    <td>
                        <input   name="commentaire" id="commentaire">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>