<?php
class Hotel {
   private $nom, $adresse, $codePostal, $ville;
   private $chambres = [];
   private $reservations = [];

   public function __construct($nom, $adresse, $codePostal, $ville) {
       $this->nom = $nom;
       $this->adresse = $adresse;
       $this->codePostal = $codePostal;
       $this->ville = $ville;
   }

   public function getNom() {
       return $this->nom;  // Return the name of the hotel
   }

   public function ajouterChambre($chambre) {
       $this->chambres[] = $chambre;
   }

   public function ajouterReservation($reservation) {
       $this->reservations[] = $reservation;
   }

   public function afficherInfoHotel() {
       $result = $this->nom . "<br>" . 
                $this->adresse . ", " . $this->codePostal . " " . $this->ville . "<br>" .
                "Nombre de chambres : " . count($this->chambres) . "<br>" .
                "Nombre de chambres réservées : " . count($this->reservations) . "<br>" .
                "Nombre de chambres dispo : " . (count($this->chambres) - count($this->reservations)) . "<br>";
       return $result;
   }

   public function afficherReservations() {
       $result = 'Réservations de l\'hôtel ' . $this->nom . ":<br>";
       foreach ($this->reservations as $reservation) {
           $result .= $reservation . "<br>";
       }
       return $result;
   }

   public function afficherReservationsClient($client) {
       $result = "Réservations de " . $client->getNom() . " " . $client->getPrenom() . ":<br>";
       foreach ($client->getReservations() as $reservation) {
           $result .= "- " . $reservation . "<br>";
       }
       return $result;
   }
}
?>


