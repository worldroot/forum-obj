<?php
	class Topic{
		private  $id = null;
		private  $msg = null;
		private  $commentaire = null;
		private  $nom = null;
		private  $prenom = null;
		private  $email = null;
		
		function __construct(string $msg, string $commentaire, string $nom, string $prenom, string $email){
			
			$this->msg=$msg;
			$this->commentaire=$commentaire;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getCommentaire(): string{
			return $this->commentaire;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getEmail(): string{
			return $this->email;
        }
        function getMsg(): string{
			return $this->msg;
        }
        
		 

		function setCommentaire(string $commentaire): void{
			$this->commentaire=$commentaire;
		}
		function setNom(string $nom): void{
			$this->nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom=$prenom;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setMsg(string $msg): void{
			$this->msg=$msg;
		}
	}
?>