<?PHP
	include "../config.php";

	class SujetCore {
		
		function ajouterSujet($Sujet){
			$sql="INSERT INTO sujet ( texte, userid, titre) 
			VALUES ( :texte, :userid, :titre)";
			var_dump($sql);
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'texte' => $Sujet->getTexte(),
                    'userid' => 10,
                    'titre' => $Sujet->getTitre()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
        }
        

        function getSujet($id){
            $sql="SELECT * FROM sujet where id=$id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	

        }
		
		function afficherSujets(){
			
			$sql="SELECT * FROM sujet";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerSujet($id){
			$sql="DELETE FROM sujet WHERE id= :id";
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

		 
		
	}

?>