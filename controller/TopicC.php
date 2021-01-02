<?PHP
	include "../config.php";
	require_once '../model/Topic.php';

	class topicC {
		
		function ajouterTopic($Topic){
			$sql="INSERT INTO topic (msg, commentaire, nom, prenom, email) 
			VALUES (:msg,:commentaire,:nom, :prenom, :email)";
			var_dump($sql);
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'msg' => $Topic->getMsg(),
                    'commentaire' => $Topic->getCommentaire(),
					'nom' => $Topic->getNom(),
					'prenom' => $Topic->getPrenom(),
					'email' => $Topic->getEmail()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherTopics(){
			
			$sql="SELECT * FROM topic";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerTopic($id){
			$sql="DELETE FROM topic WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifier($nom,$prenom,$email,$msg,$commentaire)
    {
        $sql="update forumm.topic set nom= '$nom', prenom='$prenom', email='$email'', msg='$msg', commentaire='$commentaire'' where id='$id'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('erreur:'.$e->getMessage());
        }
    }
		function recupererTopic($id){
			$sql="SELECT * from topic where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		 
		
	}

?>