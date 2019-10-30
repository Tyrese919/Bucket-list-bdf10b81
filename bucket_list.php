<?php

echo "Hoe veel activiteiten wil je toevoegen?".PHP_EOL;
$nummer = readline();

$bucket = "Wat wil je toevoegen aan jouw bucket list?";

$lijst = array();

for ($i=0; $i < $nummer ; $i++) {
 echo "$bucket".PHP_EOL;
 $wantTo = readline();

 array_push ( $lijst, $wantTo );
}

print_r( $lijst );

?>
