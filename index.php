<?php
include 'ClasseClient.php';
include 'ClasseChambre.php';
include 'ClasseHotel.php';
include 'ClasseReservation.php';

$client1 = new Client("Murmann", "Micka", "1994-03-09");
$client2 = new Client("Gibello", "Virgile", "1985-06-12");

$hotelHilton = new Hotel("Hilton Strasbourg", "10 route de la gare", "67000", "Strasbourg");

$chambre1 = new Chambre(17, 120, "Standard", true, $hotelHilton);
$chambre2 = new Chambre(3, 150, "Deluxe", true, $hotelHilton);
$chambre3 = new Chambre(4, 130, "Suite", false, $hotelHilton);

// Add rooms to the hotel
$hotelHilton->ajouterChambre($chambre1);
$hotelHilton->ajouterChambre($chambre2);
$hotelHilton->ajouterChambre($chambre3);

$reservation1 = new Reservation($client1, $chambre1, "2021-03-11", "2021-03-15");
$reservation2 = new Reservation($client2, $chambre2, "2021-03-11", "2021-03-15");
$reservation3 = new Reservation($client2, $chambre3, "2021-04-01", "2021-04-04");

// Add reservations to the hotel
$hotelHilton->ajouterReservation($reservation1);
$hotelHilton->ajouterReservation($reservation2);
$hotelHilton->ajouterReservation($reservation3);

// Display hotel information
echo $hotelHilton->afficherInfoHotel();
echo $hotelHilton->afficherReservations();

// Display client-specific reservations
echo $hotelHilton->afficherReservationsClient($client1);
echo $hotelHilton->afficherReservationsClient($client2);
?>




    

