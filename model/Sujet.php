<?php
	class Sujet{
		private  $id = null;
        private  $texte = null;
        private $user_id = null;

		
		function __construct(string $titre, string $texte,int $user_id ){
			$this->titre=$titre;
            $this->texte=$texte;
            $this->user_id=$user_id;

		}
		
		function getId(): int{
			return $this->id;
        }
        function getTitre(): string{
			return $this->titre;
		}
		function getTexte(): string{
			return $this->texte;
        }
        function getUserId(): int{
			return $this->user_id;
		}

        
		 

		function setId(string $id): void{
			$this->id=$id;
        }
        function setTitre(string $id): void{
			$this->titre=$titre;
        }
        
		function setUserId(string $user_id): void{
			$this->user_id=$user_id;
		}
		function setTexte(string $texte): void{
			$this->texte = $texte;
		}
	}
?>