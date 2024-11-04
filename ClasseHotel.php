<?php
class Hotel {
   private $nom, $adresse, $codePostal, $ville;
   private $chambres = [];
   private $reservations = [];
   private $titulaire; // Ajout de la propriété privée titulaire
   public function __construct($nom, $adresse, $codePostal, $ville) {
       $this->nom = $nom;
       $this->adresse = $adresse;
       $this->codePostal = $codePostal;
       $this->ville = $ville;
   }
   // Getter pour récupérer le titulaire
   public function getTitulaire() {
       return $this->titulaire;
   }
   // Setter pour définir le titulaire
   public function setTitulaire($titulaire) {
       $this->titulaire = $titulaire;
   }
   // Getters pour les autres propriétés
   public function getNom() {
       return $this->nom;
   }
   public function getAdresse() {
       return $this->adresse;
   }
   public function getCodePostal() {
       return $this->codePostal;
   }
   public function getVille() {
       return $this->ville;
   }
   public function getNombreChambres() {
       return count($this->chambres);
   }
   public function getNombreReservations() {
       return count($this->reservations);
   }
   public function getNombreChambresDispo() {
       return $this->getNombreChambres() - $this->getNombreReservations();
   }
   // Setters pour les autres propriétés
   public function setNom($nom) {
       $this->nom = $nom;
   }
   public function setAdresse($adresse) {
       $this->adresse = $adresse;
   }
   public function setCodePostal($codePostal) {
       $this->codePostal = $codePostal;
   }
   public function setVille($ville) {
       $this->ville = $ville;
   }
   // Méthodes pour ajouter une chambre et une réservation
   public function ajouterChambre($chambre) {
       $this->chambres[] = $chambre;
   }
   public function ajouterReservation($reservation) {
       $this->reservations[] = $reservation;
   }
   public function toString() {
    return "Hotel" . $this->nom . "Adresse" . $this->adresse . $this->codePostal . " " . $this->ville ."Nombre de chmabres" . count($this->chambres);
   }
}
?>