<?php 
class Client {
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $reservation;

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
}
    public function getDateNaissance() {
    return $this->dateNaissance;
}
public function setNom($nom) {
    $this->nom = $nom;
}
public function setPernom($prenom) {
    $this->prenom = $prenom;
}
public function setDateNaissance($dateNaissance) {
    $this->dateNaissance = $dateNaissance;
}
public function __toString() {
    return $this->getNomComplet() ." ". $this->dateNaissance  ;
}

 }
 ?>