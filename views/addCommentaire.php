<?PHP
    include "../controller/SujetCore.php";
    include "../controller/CommentaireCore.php";
    include "../model/Sujet.php";
    include "../model/Commentaire.php";




    $commentaireC = new CommentaireCore();

    if (
        isset($_POST["contenu"]) &&
        isset($_POST["sujet_id"])
    ) {
        if (
            !empty($_POST["contenu"]) &&
            !empty($_POST["sujet_id"])
        ) {

            $commentaireObject = new Commentaire(
                $_POST['contenu'],
                10 ,
                $_POST["sujet_id"]
                 # user id to change after session user
            );
            $commentaireC->ajouterCommentaire($commentaireObject);
            var_dump($commentaireObject);
            header("Location:consulterSujet.php?id=".$_POST["sujet_id"]);
        }
        else
            $error = "Missing information";
    }

    ?>