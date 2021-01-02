<?php
include "../controller/TopicC.php";

   if(isset($_POST['id'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])&&isset($_POST['msg'])&&isset($_POST['commentaire'])){
$id=$_POST["id"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$msg=$_POST["msg"];
$commentaire=$_POST["commentaire"];
$TopicC=new TopicC();
$TopicC->modifier($nom,$prenom,$email,$msg,$commentaire);
   header("location:afficherTopics.php");
   }
    ?>
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset="UTF_8">
        <title>modifier</title>
        
    </head>

    <body>
    <h1>modifier </h1>
    <form  method="post"  onsubmit="return verif()">
    <table>
    <tr>
        <tr>
            <td><label for="id">id</label></td>
            <td><input type="text"  value="<?php echo $id ?>" disabled></td>
            <td><input type="hidden" id="id" name="id" value="<?php echo $id ?>"></td>
        </tr> 
        <tr>
            <td><label for="nom">nom</label></td>
            <td><input type="text" id="name" name="nom" value="<?php echo $nom ?>"></td>
        </tr>
       
        <tr>
            <td><label for="prenom">prenom</label></td>
            
            <td><input type="text" id="prenom" name="prenom" value="<?php echo $prenom ?>"></td>
        </tr>
        <tr>
            <td><label for="email">email</label></td>
            
            <td><input type="text" id="email" name="email" value="<?php echo $email ?>"></td>
        </tr>
        <tr>
            <td><label for="msg">msg</label></td>
            
            <td><input type="text" id="msg" name="msg" value="<?php echo $msg ?>"></td>
        </tr>
        <tr>
            <td><label for="commentaire">commentaire</label></td>
            
            <td><input type="text" id="commentaire" name="commentaire" value="<?php echo $commentaire ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Modifier"></td>
        </tr>
    </table>
</form>
<script src="script.js"></script>
</body>
</html>