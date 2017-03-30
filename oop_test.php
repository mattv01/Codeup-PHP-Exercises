<?php  
require 'Person.php';

$thisGuy = new Person();

$thisGuy->name = 'Bob';
$thisGuy->age = "43";
$thisGuy->employed = true;

$thisGuy->returnName();

$thisGuy->echoAge();

$thisGuy->getJob($thisGuy->employed);

$thisGuy->getOlder();

$thisGuy->passAway();







require 'Pet.php';

$firstPet = new Pet();
$firstPet->species = "Chiweenie";
$firstPet->weight = "10lbs";
$firstPet->color = "Brown";
$firstPet->name = "Rambo";

$foodMessage = $firstPet->name . " likes to eat cat food"; 
echo $firstPet->eat($foodMessage);

$moveMessage = $firstPet->name . " doesn't move much"; 
echo $firstPet->move($moveMessage);

$sleepMessage = $firstPet->name . " sleeps all day, everyday"; 
echo $firstPet->sleep($sleepMessage);

// echo $firstPet->species . PHP_EOL;
// echo $firstPet->weight . PHP_EOL;
// echo $firstPet->color . PHP_EOL;
// echo $firstPet->name . PHP_EOL;

var_dump($firstPet);




$secondPet = new Pet();
$secondPet->species = "Chihuahua";
$secondPet->weight = "12 lbs";
$secondPet->color = "Light Brown";
$secondPet->name = "Peanut";

$foodMessage = $secondPet->name . " likes to eat anything"; 
echo $secondPet->eat($foodMessage);





$thirdPet = new Pet();
$thirdPet->species = "Daschund";
$thirdPet->weight = "5 lbs";
$thirdPet->color = "Dark Brown";
$thirdPet->name = "Ruby";

$foodMessage = $thirdPet->name . " likes to eat normal dog food"; 
echo $thirdPet->eat($foodMessage);






?>