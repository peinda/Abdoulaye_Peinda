<?php
class Chambre implements IQuizz {
    //Attributs
       //Encapsulation
      //  private $id_chambre;
        private $num_chambre;
        private $num_batiment;
        private $type_chambre;
        

// public abstract  function hydrate($row);
  
     public   function __construct($row=null){
         if($row!=null){
             $this->hydrate($row);
         }

     }
    
     public  function hydrate($row){
       // $this->id_chambre=$row['id_chambre']; 
        $this->num_chambre=$row['numero_chambre'];
        $this->num_batiment=$row['numero_batiment'];
        $this->type_chambre=$row['type_chambre']; 
         
     }
      //Methodes
        //Getters
        

        public function getNumChambre(){
            return $this->num_chambre;
        }

        public function getNumBatiment(){
            return $this->num_batiment;
        }

        public function getTypeChambre(){
            return $this->type_chambre;
        }

        //Setters
    
        

        public function setNumChambre($matricule){
            $this->num_chambre=$matricule;
       }

        public function setNumBatiment($nom){
             $this->num_batiment=$nom;
        }

        public function setTypeChambre($type_chambre){
            $this->type_chambre=$type_chambre;
       }

}