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
        return $this->titulaire;
    }

    public function getChambre() {
        return $this->chambre;
    }

    public function getDateDebut() {
        return $this->dateDebut;
    }

    public function getDateFin() {
        return $this->dateFin;
    }

    public function getTotal() {
        $days = (strtotime($this->dateFin) - strtotime($this->dateDebut)) / (60 * 60 * 24);
        return $this->chambre->getPrix() * $days;
    }

    public function __toString() {
        return $this->chambre->getHotel()->getNom() . " - Chambre " . $this->chambre->getNumero() . " (" . $this->chambre->getType() . ") - du " . $this->dateDebut . " au " . $this->dateFin . " - Total : " . $this->getTotal() . " €<br>";
    }
}
?>

