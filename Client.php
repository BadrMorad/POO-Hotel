<?php

class Client {
    private string $nom;                                      // Nom du client
    private string $prenom;                                   // Prénom du client
    private string $numeroTelephone;                           // Numéro de téléphone du client
    private string $adresseMail;                              // Adresse email du client
    private array $reservations;                              // Tableau des réservations du client

    // Constructeur de la classe, appelé lors de la création d'un nouvel objet Client
    public function __construct(string $nom, string $prenom, string $numeroTelephone, string $adresseMail) {
        $this->nom = $nom;                                    // Définit le nom du client
        $this->prenom = $prenom;                              // Définit le prénom du client
        $this->numeroTelephone = $numeroTelephone;            // Définit le numéro de téléphone
        $this->adresseMail = $adresseMail;                    // Définit l'adresse email
        $this->reservations = [];                              // Initialise le tableau des réservations
    }

    // Accéder au nom du client
    public function getNom(): string {
        return $this->nom;
    }

    // Modifier le nom du client
    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    // Accéder au prénom du client
    public function getPrenom(): string {
        return $this->prenom;
    }

    // Modifier le prénom du client
    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    // Accéder au numéro de téléphone du client
    public function getNumeroTelephone(): string {
        return $this->numeroTelephone;
    }

    // Modifier le numéro de téléphone du client
    public function setNumeroTelephone(string $numeroTelephone) {
        $this->numeroTelephone = $numeroTelephone;
    }

    // Accéder à l'adresse email du client
    public function getAdresseMail(): string {
        return $this->adresseMail;
    }

    // Modifier l'adresse email du client
    public function setAdresseMail(string $adresseMail) {
        $this->adresseMail = $adresseMail;
    }

    // Retourner toutes les réservations du client
    public function getReservations() {
        return $this->reservations;
    }

    // Ajouter une réservation au tableau des réservations du client
    public function ajouterReservation(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }

    // Afficher toutes les réservations du client
    public function afficherReservations(): string {
        // Si le client a des réservations
        if (count($this->reservations) >= 1) {
            $result = "<h2>Réservations de {$this}</h2>" . 
                      '<div class="totalreservations"><div class="uk-background-primary">' . 
                      count($this->reservations) . " RESERVATIONS</div></div>";
            $totalPrix = 0; // Initialisation du prix total des réservations

            // Parcours des réservations du client
            foreach ($this->reservations as $reservation) {
                $nbjours = $reservation->calculerNombreJours();
                if ($nbjours === 0) {
                    $nbjours = 1;  // Si la réservation dure moins d'une journée, on la considère comme une journée
                }

                // Récupérer les informations liées à la chambre de la réservation
                $chambre = $reservation->getChambre();
                $wifi = $chambre->getWifi() ? "Oui" : "Non"; // Affichage du status wifi (Oui/Non)
                $totalPrix += $chambre->getPrix() * $nbjours; // Calcul du prix total

                // Affichage des détails de la réservation
                $result .= "Hôtel : " . $chambre->getHotel()->getNomHotel() . " **** " . 
                           $chambre->getHotel()->getVille() . " / Chambre : " . 
                           $chambre->getNmChambre() . " lits - " . $chambre->getPrix() . 
                           "€ - (Wifi : " . $wifi . " ) du " . $reservation->getDateDebut() . 
                           " au " . $reservation->getDateFin() . "<br>";
            }
            $result .= "<p>Total : $totalPrix €</p>";
        } else {
            // Si le client n'a pas de réservations
            $result = "Aucune réservation au nom de {$this->prenom} {$this->nom} dans notre établissement !";
        }

        return $result;
    }

    // Méthode magique __toString() pour afficher le prénom et nom du client
    public function __toString(): string {
        return "{$this->prenom} {$this->nom}";
    }
}

  
    
  
  
  

