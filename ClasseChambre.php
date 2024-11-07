<?php
class chambre {
    private $numero;
    private $prix;
    private $type;
    private $wifi;
    private $reservation;

    public function __construct($numero, $prix, $type, $wifi) {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->type = $type;
        $this->wifi = $wifi;
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
    return "Chambre" . $this->numero . " Type " . $this->type . " Prix " . $this->prix . " wifi " . ($this->wifi);
} 
}
?>