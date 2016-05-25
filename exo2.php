<?php
class personne {
	protected $id;
	protected $nom;
	protected $prenom;
  
  function __construct($id,$nom,$prenom)
  {
    $this->id=$id;
    $this->nom=$nom;
    $this->prenom=$prenom;
  }
  
  function __toString(){
    return "id:".$this->id.",nom:".$this->nom.",prenom:".$this->prenom;
  }
  
  public function getNom()
  {
    return $this->nom;
  }
  public function setNom($qui)
  {
    $this->nom = $qui;
  }
  public function getPrenom()
  {
    return $this->prenom;
  }
  public function setPrenom($qui)
  {
    $this->prenom = $qui;
  }
}

class contact extends personne{
  protected $email;
  
  function __construct($id,$nom,$prenom,$email){
    parent::__construct($id,$nom,$prenom);
    $this->email=$email;
  }
  
  function __toString(){
    return "id:".$this->id.",nom:".$this->nom.",prenom:".$this->prenom.",email:".$this->email;
  }
}

$eleve=new contact(1,"de castro","benjamin","bdc@hotmail.fr");
echo $eleve;
?>