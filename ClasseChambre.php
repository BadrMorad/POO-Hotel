<?php
class Chambre {
    private $numero;
    private $prix;
    private $type;
    private $wifi;
    private $hotel;

    public function __construct($numero, $prix, $type, $wifi, $hotel) {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->type = $type;
        $this->wifi = $wifi;
        $this->hotel = $hotel;
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

    public function getHotel() {
        return $this->hotel;
    }

    public function __toString() {
        return "Chambre " . $this->numero . " - Type: " . $this->type . " - Prix: " . $this->prix . "€ - Wifi: " . ($this->wifi ? "Oui" : "Non") . "<br>";
    }
}
?>


