<?php
class Reservation {
    private $titulaire;
    private $chambre;
    private $dateDebut;
    private $dateFin;


    public function __construct($titulaire, $chambre, $dateDebut, $dateFin) {
        $this->titulaire = $titulaire;
        $this->chambre = $chambre;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
    }
    public function getTitulaire() {
        return $this->Titulaire;
    }
    public function getchambre() {
        return $this->chambre;
    }
    public function  getdateDebut() {
        return $this->dateDebut;
    }
public function getdateFin() {
    return $this->dateFin;
}

public function setTitulaire($titulaire) {
$this ->titulaire =$titulaire;
}
public function setChambre($Chambre) {
    return $this->$Chambre;
}
public function setDateDebut($dateDebut) {
    return $this->$dateDebut;
}
public function setDateFin($dateFin) {
    return $this->$dateFin;
}
public function __toString() {
return "Réservation pour " . $this->client;
}
}


?>
