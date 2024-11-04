<?php
include 'ClasseClient.php';
include 'ClasseChambre.php';
include 'ClasseHotel.php';
include 'ClasseReservation.php';


$client1 = new Client("Murmann", "Micka", "1994-03-09");
$client2 = new Client("Gibello", "Virgile", "1985-06-12");

$hotelHilton = new Hotel("Hilton Strasbourg", "10 route de la gare", "67000", "Strasbourg");

$chambre1 = new Chambre(1, 120,"Standard", true);
$chambre2 = new Chambre(2, 150, "Deluxe", true);
$chambre3 = new Chambre(3, 130, "Suite", false);




$reservation1 = new Reservation($client1, $chambre1, "2021-03-11", "21-03-15");
$reservation2 = new Reservation($client2, $chambre2, "2012-04-01", "2021-04-04");

var_dump($reservation1);
var_dump($reservation2);

var_dump($client1);
var_dump($client2);


var_dump($chambre1);
var_dump($chambre2);



echo $chambre1 . "<br>";
echo $chambre2 . "<br>";
echo $chambre3 . "<br>";


?>



