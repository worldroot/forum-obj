<?php
	class Commentaire{
		private  $id = null;
        private  $contenu = null;
        private $user_id = null;
        private $sujet_id = null;

		
		function __construct(string $contenu, string $user_id,int $sujet_id ){
			$this->contenu=$contenu;
            $this->user_id=$user_id;
            $this->sujet_id=$sujet_id;

        }
        

		
		function getId(): int{
			return $this->id;
        }
        function getContenu(): string{
			return $this->contenu;
		}
		function getUserId(): int{
			return $this->user_id;
        }
        function getSujetId(): string{
			return $this->sujet_id;
		}

        
		 

		function setId(string $id): void{
			$this->id=$id;
        }
        function setContenu(string $id): void{
			$this->contenu=$contenu;
        }
        
		function setUserId(string $user_id): void{
			$this->user_id=$user_id;
		}
		function setSujetId(string $sujet_id): void{
			$this->$sujet_id= $sujet_id;
		}
	}
?>