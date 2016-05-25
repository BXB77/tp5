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
?>

<?php
$eleve=new personne(1,"de castro","benjamin");
echo $eleve;
?>