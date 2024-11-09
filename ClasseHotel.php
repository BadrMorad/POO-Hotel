<?php
class Hotel {
   private $nom, $adresse, $codePostal, $ville;
   private $chambres = [];
 private $reservations = [];
   private $titulaire; // Ajout de la propriété privée titulaire

   // Constructeur de la classe, appelé lors de la création d'un objet de type Hotel
   public function __construct($nom, $adresse, $codePostal, $ville) {
       $this->nom = $nom;
       $this->adresse = $adresse;
       $this->codePostal = $codePostal;
       $this->ville = $ville;
       $this->chambres = [];

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
   // Méthode pour afficher les informations de l'hôtel sous forme de chaîne de caractère
   public function __toString() {
    return $this->nom . "<br>" .
           $this->adresse . ", " . $this->codePostal . " " . $this->ville . "<br>" .
           "Nombre de chambres : " . count($this->chambres) . "<br>" .
           "Nombre de chambres réservées : " . count($this->reservations) . "<br>" .
           "Nombre de chambres dispo : " . (count($this->chambres) - count($this->reservations));
}
}
?>