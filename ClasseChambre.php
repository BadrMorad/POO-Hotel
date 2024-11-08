<?php
class Chambre {
    private $numero;
    private $prix;
    private $type;
    private $wifi;
    private $reservations = [];
    private $hotel;

    public function __construct($numero, $prix, $type, $wifi, $hotel) {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->type = $type;
        $this->wifi = $wifi;
        $this->reservations;
        $this->hotel;
    }
    
    public function getNumero() {
        return $this->numero;
    }
    public function getPrix() {
        return $this->prix;
    }
    public function getType() {
        return $this->type;
    }
public function haswifi() {
    return $this->wifi;
}
 // Méthode magique __toString() pour afficher une représentation en chaîne de caractères de la chambre
public function __toString() {
    return "Chambre" . $this->numero . " Type " . $this->type . " Prix " . $this->prix . " wifi " . ($this->wifi) . "$this->hotel";
} 
}
?>