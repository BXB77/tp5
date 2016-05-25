<?php
class contact {
	protected $id;
	protected $nom;
	protected $prenom;
  protected $email;
  
  function __construct($id,$nom,$prenom,$email)
  {
    $this->id=$id;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->email=$email;
  }
  
  function __toString(){
    return "id: ".$this->id.",nom: ".$this->nom.",prenom: ".$this->prenom.",email: ".$this->email;
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
?>

<?php
$eleve=new contact(1,"de castro","benjamin","bdc@hotmail.fr");
echo $eleve;
?>