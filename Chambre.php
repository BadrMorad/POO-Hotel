<?php

class Chambre {
    private int $nbLit;                                  // Nombre de lits dans la chambre
    private string $nmChambre;                            // Numéro de la chambre
    private float $prix;                                  // Prix de la chambre
    private bool $wifi;                                   // Option wifi disponible dans la chambre
    private bool $disponibilite;                          // Disponibilité de la chambre
    private array $reservations;                          // Liste des réservations pour cette chambre
    private Hotel $hotel;                                 // L'hôtel auquel appartient la chambre

    // Le constructeur de la classe, appelé quand on crée un objet Chambre
    public function __construct(string $nmChambre, int $nbLit, float $prix, bool $wifi, bool $disponibilite, Hotel $hotel) {
        $this->nmChambre = $nmChambre;                    // Initialisation du numéro de la chambre
        $this->nbLit = $nbLit;                            // Initialisation du nombre de lits
        $this->prix = $prix;                              // Initialisation du prix de la chambre
        $this->wifi = $wifi;                              // Initialisation de l'option wifi
        $this->disponibilite = $disponibilite;            // Initialisation de la disponibilité de la chambre
        $this->hotel = $hotel;                            // Lien avec l'hôtel
        $this->reservations = [];                         // Initialisation de la liste des réservations

        // Ajouter la chambre à l'hôtel
        $hotel->ajouterChambre($this);
    }

    // Accéder au numéro de chambre
    public function getNmChambre(): string {
        return $this->nmChambre;
    }

    // Modifier le numéro de la chambre
    public function setNmChambre(string $nmChambre) {
        $this->nmChambre = $nmChambre;
    }

    // Accéder au nombre de lits
    public function getNbLit(): int {
        return $this->nbLit;
    }

    // Modifier le nombre de lits
    public function setNbLit(int $nbLit) {
        $this->nbLit = $nbLit;
    }

    // Accéder au prix de la chambre
    public function getPrix(): float {
        return $this->prix;
    }

    // Modifier le prix de la chambre
    public function setPrix(float $prix) {
        $this->prix = $prix;
    }

    // Accéder à la disponibilité du wifi
    public function getWifi(): bool {
        return $this->wifi;
    }

    // Modifier l'option wifi
    public function setWifi(bool $wifi) {
        $this->wifi = $wifi;
    }

    // Accéder à la disponibilité de la chambre
    public function getDisponibilite(): bool {
        return $this->disponibilite;
    }

    // Modifier la disponibilité de la chambre
    public function setDisponibilite(bool $disponibilite) {
        $this->disponibilite = $disponibilite;
    }

    // Accéder à l'hôtel auquel appartient la chambre
    public function getHotel() {
        return $this->hotel;
    }

    // Modifier l'hôtel de la chambre
    public function setHotel($hotel) {
        $this->hotel = $hotel;
    }

    // Ajouter une réservation à la chambre
    public function ajouterReservation(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }

    // Méthode pour afficher les informations de la chambre (optionnelle, pas encore implémentée)
    public function __tostring() {
        // Code d'affichage à venir, par exemple, retour des détails de la chambre
    }
}
