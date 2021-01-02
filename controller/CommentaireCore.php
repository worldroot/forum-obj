<?PHP

	class CommentaireCore {
		
		function ajouterCommentaire($Commentaire){
			$sql="INSERT INTO commentaire ( contenu, userid, sujetid) 
			VALUES ( :contenu, :userid, :sujetid)";
			var_dump($sql);
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'contenu' => $Commentaire->getContenu(),
                    'userid' => 10,
                    'sujetid' => $Commentaire->getSujetID()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherCommentaires($sujet_id){
			
			$sql="SELECT * FROM commentaire WHERE sujetid=$sujet_id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerCommentaire($id){
			$sql="DELETE FROM commentaire WHERE id= :id";
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
        



		 
		
	}

?>